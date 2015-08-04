<!DOCTYPE html>
<html lang="en" ng-app="JavaScriptExercise">
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>

        <!-- Bootstrap Latest compiled and minified CSS -->
        <link type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet"/>

        <!-- Optional Bootstrap theme -->
        <link type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css"
              rel="stylesheet"/>

        <link type="text/css" href="css/style.css" rel="stylesheet"/>
        <script type="text/javascript" src="javascript/event.js"></script>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script type="text/javascript" src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script type="text/javascript" src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <script type="text/javascript"
                src="//cdnjs.cloudflare.com/ajax/libs/jquery.form/3.51/jquery.form.min.js"></script>
        <script type="text/javascript"
                src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>
        <script type="text/javascript"
                src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.12.1/additional-methods.min.js"></script>

        <!-- Latest compiled and minified Bootstrap JavaScript, all compiled plugins included -->
        <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

        <!-- angular.js -->
        <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/angularjs/1.4.3/angular.min.js"></script>
        <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/ngStorage/0.3.7/ngStorage.min.js"></script>
        <script type="text/javascript"
                src="//cdnjs.cloudflare.com/ajax/libs/angular-ui-bootstrap/0.13.0/ui-bootstrap-tpls.min.js"></script>
        <script type="text/javascript" src="/angular/javascript-exercise.js"></script>

        <title>JavaScript Exercise</title>
    </head>
    <body>
        <header>
            <div class="container">
                <h1>JavaScript Exercise</h1>
            </div>
        </header>

        <div class="container">
            <div class="row round">
                <div class="col-md-3">
                    <div class="row">

                        <div class="padding">
                            <button class="btn btn-primary" name="find-and-replace" onclick="findAndReplace();">Find and
                                replace
                            </button>

                            <div class="row">
                                <div class="col-md-12">
                                    <input id="find" type="text" name="find" value="" placeholder="Find"/>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <input id="replace" type="text" name="replace" value="" placeholder="Replace"/>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="padding">
                            <button class="btn btn-danger" name="rot13-encryption" onclick="rot13();">ROT13</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="padding">
                            <button class="btn btn-warning" name="find-button" onclick="findWithAngular();">Highlight:
                            </button>
                            <input id="find-angular" type="text" name="find-angular" placeholder="With AngularJS!"/>
                        </div>
                    </div>
                </div>
                <div class="padding">
                    <div class="col-md-9">
                        <p id="text">
                            When he was nearly thirteen, my brother Jem got his arm badly broken at the elbow. When it
                            healed, and Jem's fears of never being able to play football were assuaged, he was seldom
                            self-conscious about his injury. His left arm was somewhat shorter than his right; when he
                            stood
                            or walked, the back of his hand was at right angles to his body, his thumb parallel to his
                            thigh. He couldn't have cared less, so long as he could pass and punt.

                            When enough years had gone by to enable us to look back on them, we sometimes discussed the
                            events
                            leading to his accident. I maintain that the Ewells started it all, but Jem, who was four
                            years
                            my
                            senior, said it started long before that. He said it began the summer Dill came to us, when
                            Dill
                            first gave us the idea of making Boo Radley come out.

                            I said if he wanted to take a broad view of the thing, it really began with Andrew Jackson.
                            If
                            General Jackson hadn't run the Creeks up the creek, Simon Finch would never have paddled up
                            the
                            Alabama, and where would we be if he hadn't? We were far too old to settle an argument with
                            a
                            fist-fight, so we consulted Atticus. Our father said we were both right.

                            Being Southerners, it was a source of shame to some members of the family that we had no
                            recorded
                            ancestors on either side of the Battle of Hastings. All we had was Simon Finch, a
                            fur-trapping
                            apothecary from Cornwall whose piety was exceeded only by his stinginess. In England, Simon
                            was
                            irritated by the persecution of those who called themselves Methodists at the hands of their
                            more
                            liberal brethren, and as Simon called himself a Methodist, he worked his way across the
                            Atlantic
                            to
                            Philadelphia, thence to Jamaica, thence to Mobile, and up the Saint Stephens. Mindful of
                            John
                            Wesley's strictures on the use of many words in buying and selling, Simon made a pile
                            practicing
                            medicine, but in this pursuit he was unhappy lest he be tempted into doing what he knew was
                            not
                            for
                            the glory of God, as the putting on of gold and costly apparel. So Simon, having forgotten
                            his
                            teacher's dictum on the possession of human chattels, bought three slaves and with their aid
                            established a homestead on the banks of the Alabama River some forty miles above Saint
                            Stephens.
                            He
                            returned to Saint Stephens only once, to find a wife, and with her established a line that
                            ran
                            high
                            to daughters. Simon lived to an impressive age and died rich.

                            It was customary for the men in the family to remain on Simon's homestead, Finch's Landing,
                            and
                            make their living from cotton. The place was self-sufficient: modest in comparison with the
                            empires around it, the Landing nevertheless produced everything required to sustain life
                            except
                            ice, wheat flour, and articles of clothing, supplied by river-boats from Mobile.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>