angular
  .module('Mobidul')
  .controller('StationController', StationController);


StationController.$inject = [
  '$log', '$rootScope', '$sce', '$scope', '$compile', '$interval', '$timeout',
  '$state', '$sanitize', '$stateParams', 'StateManager',
  'StationService', 'MobidulService', 'HeaderService', 'MapService',
  'UserService', 'RallyService', 'GeoLocationService', 'FontService'
];


function StationController (
  $log, $rootScope, $sce, $scope, $compile, $interval, $timeout,
  $state, $sanitize, $stateParams, StateManager,
  StationService, MobidulService, HeaderService, MapService,
  UserService, RallyService, GeoLocationService, FontService
) {
  var station = this;

  /// constants
  // ...

  /// vars
  station.mediaList     = [];
  station.imageList     = [];
  station.rawText       = '';
  station.text          = 'wird geladen';
  // station.loading       = 'visible';
  station.loading       = 'block';
  station.stationId     = 0;
  station.panZoomConfig = {};
  station.panZoomModel  = {};
  station.myFont        = '';

  /// functions
  // station.getStation        = getStation;
  station.renderText        = renderText;
  station.getPictureByHash  = getPictureByHash;
  $scope.actionPerformed    = actionPerformed;

  /// XXX temp function
  station.rallyActivate     = __rallyActivate;
  station.rallyOpen         = __rallyOpen;
  station.rallyComplete     = __rallyComplete;
  station.progressToNext    = __progressToNext;

  // XXX why is this nicer or better than calling what it returns ?
  station.__isStatusActivated = function () {
    return RallyService.isStatusActivated();
  };
  station.__isStatusOpen = function () {
    return RallyService.isStatusOpen();
  };


  /// construct

  _init();


  /// XXX temp functions

  function __rallyActivate ()
  {
    RallyService.setProgress( station.order );
    RallyService.setStatus( RallyService.STATUS_ACTIVATED );

    // XXX hard refresh the current state ! (will be removed)
    $timeout(function(){
      $state.go($state.current, {}, {reload: true});
    }, 300);
  }

  function __rallyOpen ()
  {
    RallyService.setStatus( RallyService.STATUS_OPEN );

    // XXX hard refresh the current state ! (will be removed)
    $timeout(function(){
      $state.go($state.current, {}, {reload: true});
    }, 300);
  }

  function __rallyComplete ()
  {
    RallyService.setStatus( RallyService.STATUS_COMPLETED );
    RallyService.activateNext();

    // XXX hard refresh the current state ! (will be removed)
    $timeout(function(){
      $state.go($state.current, {}, {reload: true});
    }, 300);
  }

  function __progressToNext () {
    RallyService.progressToNext();
  }


  /// private functions

  function _init ()
  {
    $log.debug('StationController init');

    _initStation();
    _initActionListener();

    _listenToConfig();
  }


  function _initStation ()
  {
    if ( StateManager.state.params.mobidulCode &&
         StateManager.state.params.stationCode &&
         StateManager.state.params.stationCode != StateManager.NEW_STATION_CODE
    ) {
      StationService
        .getStation(
          StateManager.state.params.mobidulCode,
          StateManager.state.params.stationCode
        )
        .success(function (response, status, headers, config)
        {
          //$log.info('_initStation station response :');
          //$log.debug(response);

          if ( response === '' )
          {
            station.text = 'Zu diesem Code ist leider keine Station vorhanden ...';

            UserService.Permit.EditStation = false;
          }
          else
          {
            MobidulService
              .isRally( StateManager.state.params.mobidulCode )
              .then(function (isRally)
              {
                var goToCurrentTesting = false;

                if (
                  isRally &&
                  ! RallyService.isEligible(response.order) &&
                  ! StateManager.isStationCreator() &&
                  ! goToCurrentTesting
                ) {
                  RallyService.goToCurrent();
                }
              });

            UserService.Permit.EditStation = response.canEdit && UserService.Permit.EditStation;

            // $log.info("response");
            // $log.debug(response);

            station.rawText      = response.content;
            station.stationId    = response.stationId;
            station.stationName  = response.stationName;
            station.order        = response.order;
            station.coords       = response.coords;

            /// XXX this is just for testing purposes
            /// choosing right content based on Mobidul type
            RallyService.refresh();

            var statusContent = new Array();
            statusContent['hidden']    = '<p style="background:#eee; font-weight:bold">This is the content for status "hidden"</p>';
            statusContent['activated'] = '<p style="background:#eee; font-weight:bold">This is the content for status "activated"</p>';
            statusContent['open']      = '<p style="background:#eee; font-weight:bold">This is the content for status "open"</p>';
            statusContent['completed'] = '<p style="background:#eee; font-weight:bold">This is the content for status "completed"</p>';

            //station.rawText      = statusContent[ RallyService.getStatus( station.order ) ] + response.content;
            station.rawText      = response.content;


            StationService.setName( response.stationName );


            // TODO document what this is doing !!

            station.mediaList[ response.stationId ] = [];

            for ( var i = 0; i < response.mediaList.length; i++ )
            {
              var currMediaListHash = response.mediaList[ i ].hash;

              station.mediaList[ response.stationId ].push(
              {
                'hash'      : currMediaListHash,
                'timestamp' : response.mediaList[ i ].timestamp
              });

              if ( typeof station.imageList[ currMediaListHash ] == 'undefined' )
              {
                station.imageList[ currMediaListHash ] =
                {
                  'url'            : response.mediaList[ i ].url,
                  'uploaded'       : true,
                  'uploadprogress' : 100
                };
              }
            }


            // Check whether Station has JSON Content
            try {
              //$log.debug(station.rawText);
              station.config = JSON.parse(station.rawText);
              station.isJSON = true;

              //Display dev tools for rally
              if(UserService.Session.role == 1) station.isOwner = true;
              else station.isOwner = false;

              renderJSON();
            }
            catch (e) {
              $log.info("No JSON");
              //$log.error(e);
              station.isJSON = false;
              station.renderText();
            }
          }

          // station.loading = 'hidden';
          station.loading = 'none';
        })
        .error(function (response, status, headers, config)
        {
          $log.error('couldn\'t get station');
          $log.error(response);
          $log.error(status);

          // station.loading = 'hidden';
          station.loading = 'none';
        })
        .then(function ()
        {
          HeaderService.refresh();

          $rootScope.$emit('rootScope:toggleAppLoader', { action : 'hide' });
        });
    }
  }

  function _initActionListener ()
  {
    $scope.$on('action', function(event, msg){
      actionPerformed(msg);
    });
  }


  function _listenToConfig ()
  {
    var setConfigListener =
      $rootScope.$on('rootScope:setConfig', function (event, config)
      {
        // $log.debug('Listened to "rootScope:setConfig" in StationController');
        // $log.debug(config);

        station.myFont = FontService.getFontClass( MobidulService.Mobidul.font );
      });

    $scope.$on('$destroy', setConfigListener);
  }


  function renderText ()
  {
    var ergebnis = station.rawText; //.replace(/<.[^>]*>/g, '');
        ergebnis = '\n' + ergebnis; // billiger Trick - so ist auch vor Beginn der ersten Zeile ein \n, und das gilt auch als Whitespace also \s

    var regexp =
    [
      // fett: beginnender * nach einem Whitespace (auch \n)
      /(\s)\*([^*\s][^*]*[^*\s])\*/g,
      // H1: beginnender ** nach einem Whitespace (auch \n)
      /\s\*\*([^*\s][^*]*[^*\s])\*\*/g,
      // kursiv: beginnender _ nach einem Whitespace (auch \n)
      /(\s)\_([^*\s][^_]*[^*\s])\_/g,
      // Links werden einfach am http... erkannt
      /(\s)(https?:\/\/\S+)(\s)/g,
      // normale Links, die mit --- markiert sind
      /(\s)-{3}(https?:\/\/[^\s]+)-{3}/g,
      // Links auf eine interne Mobilot-Seite - soll per JS geladen werden!!
      /*/(\s)-{3}(\w+)-{3}/g,*/
      // BILDxxx nur am Anfang einer Zeile
      /\nBILD([0-9]+)/g,
      // VIDEOxyz nur am Anfang einer Zeile, gibt den Dateinamen (ohne Dateierweiterung an)
      /\nVIDEO(\w)/g,
      // AUDIOxyz nur am Anfang einer Zeile, gibt den Dateinamen (ohne Dateierweiterung an)
      /\nAUDIO(\w)/g,
      // löscht führende Zeilenumbruch weg (u.a. den billigen Trick) - wir starten nicht mir leeren Zeilen
      /^\n+/,
      // Carriage Return (also eingegebenes Enter) - muss als letztes ersetzt werden!!!
      /\n/g
    ];


    var ersetzung =
    [
      // fett: $1 ist das Leerzeichen oder CR vor dem *, $2 der fette Text
      '$1<b>$2</b>',
      // $1 ist der Text (das vorherige Leerzeichen oder CR brauchen wir bei H1 (=Blockelement) nicht)
      '<h1>$1</h1>',
      // $1 ist das Leerzeichen oder CR vor dem *, $2 der kursive Text
      '$1<i>$2</i>',
      // ersetzt URLs automatisch durch Link auf die URL
      '$1<a href="$2">$2</a>$3',
      // externe Links mit --- Syntax
      '$1<a href="$2">$2</a>',
      // es werden 2 Params übergeben, 1) der Match, 2) die Bildnummer (weil in runden Klammern)
      null,
      // es werden 2 Params übergeben, 1) der Match, 2) das Video (weil in runden Klammern)
      null,
      // es werden 2 Params übergeben, 1) der Match, 2) das Audio (weil in runden Klammern)
      null,
      '',
      '</p><p>'
    ];


    for ( var i = 0; i < regexp.length; i++ )
    {
      oneRegExp    = regexp[ i ];
      oneErsetzung = ersetzung[ i ];

      if ( i != 5 && i != 6 && i != 7 )
        ergebnis = ergebnis.replace(oneRegExp, oneErsetzung);

      if ( i == 5 )
      {
        var scope = station;
        //ergebnis.replace bei Bild geht nicht, da die Bilder() funktion dann nicht auf this zugreifen.
        ergebnis = ergebnis.replace(oneRegExp, function (match, bildNummer)
        {
          var myMediaList = [];

          //for new stations: images should be at -1 in medialist
          var stationid = ( scope.stationId != '' ) ? scope.stationId : -1;

          //make it safe!!
          if ( typeof scope.stationId != 'undefined' &&
               typeof scope.mediaList != 'undefined'
          ) {
            if ( typeof scope.mediaList[ stationid ] != 'undefined' )
            {
              for ( var i = 0; i < scope.mediaList[ stationid ].length; i++ )
              {
                myMediaList.push(scope.mediaList[ stationid ][ i ]);
              }

              myMediaList.sort(function (x, y)
              {
                return x.timestamp - y.timestamp;
              });
              //getPictureByHash

              //not sure if bildNummer -1 or bildNummer
              if ( bildNummer > myMediaList.length || myMediaList.length == 0 )
              {
                return "<p>Ung&uuml;ltige Bildnummer: " + bildNummer + "</p>";
              }
              else
              {
                // an der Stelle wird für die Bildnummer die URL des Bildes (sollte md5-Hash sein) eingesetzt.

                var image = scope.getPictureByHash( myMediaList[ bildNummer-1 ].hash );

                if ( image != null )
                {
                  var imgSrc = 'image/' + window.screen.availWidth + '/' + image.url;

                  if ( Boolean( image.uploaded ) )
                    return '<a href="#/' + StateManager.state.params.mobidulCode + '/media/' + image.url +'">' +
                      '<img class="picture" '    +
                           'src="' + imgSrc + '" ' +
                           'width="100%" '     +
                           'height="auto" '    +
                           'style="max-width : '   + window.screen.availWidth + 'px"></a>';
                  else
                    // TODO maybe add missing image default image (thumbnail)
                    return  '<a href="#/' + StateManager.state.params.mobidulCode + '/media/' + image.url + '">' +
                      '<img class="picture" '    +
                           'src="' + imgSrc + '" ' +
                           'width="100%" '     +
                           'height="auto" '    +
                           'style="max-width : '   + window.screen.availWidth + 'px"></a>';
                }
                else
                  // $log.debug("image was null");
                  $log.debug('image was null');
              }
            }
          }

          return "Bild " + bildNummer + " nicht gefunden";
        });
      }

      if ( i == 6 )
      {
        var stateParams = StateManager.state.params;

        ergebnis = ergebnis.replace(oneRegExp, function (match, videoFileName)
        {
          var videostring = '<video controls style="width: 100%;" ' +
              'poster="http://mobilot.at/media/'    +
              stateParams.mobidulCode               +
              '/' + videoFileName + '.jpg"'         +
            '>' +
              '<source src="http://mobilot.at/media/' +
                 stateParams.mobidulCode              +
                 '/' + videoFileName + '.mp4" '       +
                'type="video/mp4"'                    +
              '>' +
            '</video>';

          return videostring;
        });
      }

      if ( i == 7 )
      {
        var stateParams = StateManager.state.params;

        ergebnis = ergebnis.replace( oneRegExp, function (match, audioFileName)
        {
          var audiostring = '<audio controls style="width : 100%">' +
            '<source src="http://mobilot.at/media/'                 +
              stateParams.mobidulCode + '/'                         +
              audioFileName + '.mp3" '                              +
              'type="audio/mp3"'                                    +
            '>'                                                     +
          '</audio>';

          return audiostring;
        });
      }
    }


    if ( this.disablelinks ) {
      ergebnis = ergebnis.replace(/-{3}(\w+)-{3}/g, '<font color="blue" style="text-decoration:underline">Klick</font>');
    }
    else // <paper-button affirmative on-tap="{{ positiveDeleteStation }}">Löschen</paper-button>
    {
      ergebnis = ergebnis.replace(/-{3}(\w+)-{3}/g, '<a href="#/' + StateManager.state.params.mobidulCode + '/$1/">Station $1</a>');
    }
    ///*href="' + location.protocol + '//' + location.host + '/' + this.mobidul + '/#/content/$1\"

    ergebnis = '<p>' + ergebnis + '</p>';

    // replace (some) empty paragraph tags
    ergebnis = ergebnis.replace(/<p><\/p>/gmi, '');
    // replace (the rest of) empty paragraph tags
    ergebnis = ergebnis.replace(/<p><\/p>/gmi, '');


    station.text = $sce.trustAsHtml( ergebnis );
  }


  /**
   * Appends Rally Directives to their container
   */
  function renderJSON ()
  {
    var status = RallyService.getStatus(station.order);

    //$log.info('Status of Station:');
    //$log.debug(status);

    var config = station.config[status];

    var container = document.getElementById('station-container');
    container.innerHTML = '';

    if (config) {
      config.forEach(function (obj)
      {
        var type = obj.type;

        if ( ! type) {
          $log.error('JSON Object doesn\'t have a type ! (ignoring)');
        }
        else {
          switch (type)
          {
            case 'html':
              angular
                .element(container)
                .append($compile('<html-container>' + $sanitize(obj.content) + '</html-container>')($scope))
              break;

            case 'inputCode':
              angular
                .element(container)
                .append($compile("<inputcode verifier='" + obj.verifier + "' success='" + obj.success + "' error='" + obj.error + "'></inputcode>")($scope));
              break;

            case 'scanCode':
              angular
                .element(container)
                .append($compile("<scancode></scancode>")($scope));
              break;

            case 'navigator':
              angular
                .element(container)
                .append($compile("<navigator></navigator>")($scope));
              break;

            case 'button':
              angular
                .element(container)
                .append($compile("<actionbutton success='" + obj.success + "'>" + obj.content + "</actionbutton>")($scope));
              break;

            case 'ifNear':
              // HACK: force to startwatching after stopwatching event from headerservice
              $timeout(function(){ GeoLocationService.startPositionWatching(station.coords);},0);

              angular
                .element(container)
                .append($compile("<positionicon range='" + obj.range + "' fallback='" + obj.fallback + "' success='" + obj.success + "'></positionicon>")($scope));

              break;

            default:
              $log.error("Objecttype not known: " + type);
              break;
          }
        }
      });
    }

  }

  /**
   * Rally-Directives trigger these actions
   *
   * @param action
   */
  function actionPerformed (action)
  {
    //allowing passing additional parameters with the action string
    var attr;
    attr = action.split(':')[1];
    action = action.split(':')[0];

    switch (action)
    {
      case 'showNext':
        $log.debug("showNext");
        break;

      case 'openThis':
        RallyService.setStatus('open');
        $log.debug('openThis');
        renderJSON();
        //$state.go($state.current, {}, {reload: true});
        break;

      case 'completeThisAndShowNext':
        $log.debug('completeThisAndShowNext');
        RallyService.setStatus('completed');
        RallyService.activateNext();
        RallyService.progressToNext();
        //$state.go($state.current, {}, {reload: true});
        break;

      case 'completeThis':
        $log.debug('completeThis');
        RallyService.setStatus('completed');
        break;

      case 'activateAndShowNext':
        RallyService.activateNext();
        RallyService.progressToNext();
        break;

      case 'say':
        // TODO: show modal window
        alert(attr);
        break;

      case 'showPrev':
        $log.debug("showPrev");
        break;

      case 'verifyIfNear':
        GeoLocationService.stopPositionWatching();
        actionPerformed(attr);
        break;

      case 'goToCurrent':
        RallyService.goToCurrent();
        break;

      default:
        $log.debug("Action not available: " + action);
        break;
    }
  }

  function getPictureByHash (hash)
  {
    if ( hash != null )
    {
      // suche in Bildliste nach Bild
      if ( typeof station.imageList[ hash ] != 'undefined' )
        return station.imageList[ hash ];
    }

    return null;
  }


  /// events
  // ...

}