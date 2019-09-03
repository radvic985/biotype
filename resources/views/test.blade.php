<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Тест</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/main.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
</head>
<body>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">@lang('messages.Biotype')</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">@lang('messages.Test')</a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">@lang('messages.Profile')<span
                                class="caret"></span></a>
                    <ul class="dropdown-menu">
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">@lang('messages.Correction')<span
                                class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">@lang('messages.Age')</a></li>
                        <li><a href="#">@lang('messages.Activity')</a></li>
                        <li><a href="#">@lang('messages.Climate of the country')</a></li>
                        <li><a href="#">@lang('messages.Seasons of the year')</a></li>
                        <li><a href="#">@lang('messages.Times of Day')</a></li>
                        <li><a href="#">@lang('messages.Massage')</a></li>
                        <li><a href="#">@lang('messages.Aromatherapy')</a></li>
                        <li><a href="#">@lang('messages.Sauna')</a></li>
                        <li><a href="#">@lang('messages.Purification')</a></li>
                        <li><a href="#">@lang('messages.Abstinence')</a></li>
                        <li><a href="#">@lang('messages.Weight')</a></li>
                        <li><a href="#">@lang('messages.Compatibility')</a></li>
                        <li><a href="#">@lang('messages.Diseases')</a></li>
                    </ul>
                </li>
                <li class="dropdown-submenu">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">@lang('messages.Nutrition')<span
                                class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-submenu">
                            <a href="#">@lang('messages.By biotypes')</a>
                            <ul class="dropdown-menu">
                                <li><a href="#">@lang('messages.Sanguine person')</a></li>
                                <li><a href="#">@lang('messages.Choleric person')</a></li>
                                <li><a href="#">@lang('messages.Melancholic person')</a></li>
                                <li><a href="#">@lang('messages.Phlegmatic person')</a></li>
                                <li><a href="#">@lang('messages.Sanguine-Melancholic person')</a></li>
                                <li><a href="#">@lang('messages.Sanguine-Phlegmatic person')</a></li>
                                <li><a href="#">@lang('messages.Choleric-Melancholic person')</a></li>
                                <li><a href="#">@lang('messages.Choleric-Phlegmatic person')</a></li>
                                <li><a href="#">@lang('messages.Melancholic-Sanguine person')</a></li>
                                <li><a href="#">@lang('messages.Melancholic-Choleric person')</a></li>
                                <li><a href="#">@lang('messages.Melancholic-Phlegmatic person')</a></li>
                                <li><a href="#">@lang('messages.Phlegmatic-Melancholic person')</a></li>
                                <li><a href="#">@lang('messages.Phlegmatic-Sanguine person')</a></li>
                                <li><a href="#">@lang('messages.Phlegmatic-Choleric person')</a></li>
                            </ul>
                        </li>
                        <li class="dropdown-submenu">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">@lang('messages.Products')</a>
                            <ul class="dropdown-menu">
                                <li><a href="#">@lang('messages.Vegetables')</a></li>
                                <li><a href="#">@lang('messages.Oils, grains, seeds, nuts')</a></li>
                                <li><a href="#">@lang('messages.Cereal, legumes')</a></li>
                                <li><a href="#">@lang('messages.Dairy products')</a></li>
                                <li><a href="#">@lang('messages.Meat, fish, eggs')</a></li>
                                <li><a href="#">@lang('messages.Fruits, sweets')</a></li>
                                <li><a href="#">@lang('messages.Seasonings, spices')</a></li>
                                <li><a href="#">@lang('messages.Herbal teas')</a></li>
                                <li><a href="#">@lang('messages.Juices, drinks')</a></li>
                            </ul>
                        </li>
                        <li class="dropdown-submenu">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">@lang('messages.Recipes')</a>
                            <ul class="dropdown-menu">
                                <li><a href="#">@lang('messages.Own recipes')</a></li>
                                <li><a href="#">@lang('messages.Vedic')</a></li>
                                <li><a href="#">@lang('messages.Ukrainian')</a></li>
                                <li><a href="#">@lang('messages.Russian')</a></li>
                                <li><a href="#">@lang('messages.Italian')</a></li>
                                <li><a href="#">@lang('messages.Spanish')</a></li>
                                <li><a href="#">@lang('messages.Indian')</a></li>
                                <li><a href="#">@lang('messages.French')</a></li>
                                <li><a href="#">@lang('messages.Chinese')</a></li>
                                <li><a href="#">@lang('messages.Japanese')</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">@lang('messages.Purification')<span
                                class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">@lang('messages.Abstinence')</a></li>
                        <li><a href="#">@lang('messages.Water')</a></li>
                        <li><a href="#">@lang('messages.Herbals')</a></li>
                        <li><a href="#">@lang('messages.Massage')</a></li>
                        <li><a href="#">@lang('messages.Aromatherapy')</a></li>
                        <li><a href="#">@lang('messages.Prayer')</a></li>
                        <li><a href="#">@lang('messages.Exercises')</a></li>
                        <li><a href="#">@lang('messages.Sauna')</a></li>
                    </ul>
                </li>
                <li><a href="#">@lang('messages.Settings')</a></li>
                <li><a href="#">@lang('messages.Help')</a></li>
                <li><a href="#">@lang('messages.Theory')</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><span class="glyphicon glyphicon-user"></span>@lang('messages. Sign up')</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-log-in"></span>@lang('messages. Sign in')</a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">@lang('messages.Language')<span
                                class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?= route('setlocale', ['lang' => 'en']) ?>">English</a></li>
                        <li><a href="<?= route('setlocale', ['lang' => 'ru']) ?>">Русский</a></li>
                        <li><a href="<?= route('setlocale', ['lang' => 'uk']) ?>">Українська</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="content">
    <div class="container">
        <div class="message alert alert-danger alert-dismissable fade in">
            <a href="#" class="close" aria-label="close">&times;</a>
            @lang('messages.Need to answer all the questions!')
        </div>
        <div class="instruction col-md-6 col-md-offset-3 lead">@lang('messages.From the three statements, choose one that most applies to you. It is advisable that your relatives or friends confirm the correctness of your answers. Base your choice on what is most consistent with your lifestyle for many years')</div>
        <div class="col-md-12">
            <button class="start_test btn btn-success btn-lg">@lang('messages.Start the Test')</button>
        </div>
        <div class="constant">@lang('messages.Constant characteristics')</div>
        <div class="constant_variable">@lang('messages.Variable characteristics')</div>
        <div class="constant_description">@lang('messages.Those constituents such as the constitution of the body, which practically do not change throughout life')</div>
        <div class="constant_description_variable">@lang('messages.Those constituents such as the constitution of the body, which from time to time change throughout life')</div>
        <div class="question1">
            <h4 class="text-center">#1. @lang('messages.Body Type: active')</h4>
            <div class="row">
                <div id="answer1" class="answer col-md-2 col-sm-4 col-xs-4 col-md-offset-3">
                    <div class="thumbnail">
                        <img src="{{asset('images\1_thin.png')}}" alt="Image"/>
                    </div>
                    <div class="caption">
                        <p>@lang('messages.Thin, high or low')</p>
                    </div>
                </div>
                <div id="answer2" class="answer col-md-2 col-sm-4 col-xs-4">
                    <div class="thumbnail">
                        <img src="{{asset('images\1_average.png')}}" alt="Image"/>
                    </div>
                    <div class="caption">
                        <p>@lang('messages.Average')</p>
                    </div>
                </div>
                <div id="answer3" class="answer col-md-2 col-sm-4 col-xs-4">
                    <div class="thumbnail">
                        <img src="{{asset('images\1_fat.png')}}" alt="Image"/>
                    </div>
                    <div class="caption">
                        <p>@lang('messages.Large')</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="question2">
            <h4 class="text-center">#2. @lang('messages.Body Type: as a child, under 14 years old')</h4>
            <div class="row">
                <div id="answer1" class="answer col-md-2 col-sm-4 col-xs-4 col-md-offset-3">
                    <div class="thumbnail">
                        <img src="{{asset('images\2_thin.png')}}" alt="Image"/>
                    </div>
                    <div class="caption">
                        <p>@lang('messages.Thin')</p>
                    </div>
                </div>
                <div id="answer2" class="answer col-md-2 col-sm-4 col-xs-4">
                    <div class="thumbnail">
                        <img src="{{asset('images\2_average.png')}}" alt="Image"/>
                    </div>
                    <div class="caption">
                        <p>@lang('messages.Average')</p>
                    </div>
                </div>
                <div id="answer3" class="answer col-md-2 col-sm-4 col-xs-4">
                    <div class="thumbnail">
                        <img src="{{asset('images\2_fat.png')}}" alt="Image"/>
                    </div>
                    <div class="caption">
                        <p>@lang('messages.Large, fullness')</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="question3">
            <h4 class="text-center">#3. @lang('messages.Body fat: when weight is set')</h4>
            <div class="row">
                <div id="answer1" class="answer col-md-2 col-sm-4 col-xs-4 col-md-offset-3">
                    <div class="thumbnail">
                        <img src="{{asset('images\3_thin.png')}}" alt="Image"/>
                    </div>
                    <div class="caption">
                        <p>@lang('messages.In the waist region')</p>
                    </div>
                </div>
                <div id="answer2" class="answer col-md-2 col-sm-4 col-xs-4">
                    <div class="thumbnail">
                        <img src="{{asset('images\3_average.png')}}" alt="Image"/>
                    </div>
                    <div class="caption">
                        <p>@lang('messages.Distributed evenly')</p>
                    </div>
                </div>
                <div id="answer3" class="answer col-md-2 col-sm-4 col-xs-4">
                    <div class="thumbnail">
                        <img src="{{asset('images\3_fat.png')}}" alt="Image"/>
                    </div>
                    <div class="caption">
                        <p>@lang('messages.In the buttocks and hips')</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="question4">
            <h4 class="text-center">#4. @lang('messages.Bones, width and volume')</h4>
            <div class="row">
                <div id="answer1" class="answer col-md-2 col-sm-4 col-xs-4 col-md-offset-3">
                    <div class="thumbnail">
                        <img src="{{asset('images\4_bones1.png')}}" alt="Image"/>
                    </div>
                    <div class="caption">
                        <p>@lang('messages.Thin with protruding joints: for men - the wrist less than 15 cm; for women - the wrist is less than 13.4 cm')</p>
                    </div>
                </div>
                <div id="answer2" class="answer col-md-2 col-sm-4 col-xs-4">
                    <div class="thumbnail">
                        <img src="{{asset('images\4_bones2.png')}}" alt="Image"/>
                    </div>
                    <div class="caption">
                        <p>@lang('messages.Medium, normal: for men - the wrist 15-17 cm; for women - the wrist 13.4-17.2 cm')</p>
                    </div>
                </div>
                <div id="answer3" class="answer col-md-2 col-sm-4 col-xs-4">
                    <div class="thumbnail">
                        <img src="{{asset('images\4_bones3.png')}}" alt="Image"/>
                    </div>
                    <div class="caption">
                        <p>@lang('messages.Massive, wide: for men - the wrist more than 17 cm; for women - the wrist more than 17.2 cm')</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="question5">
            <h4 class="text-center">#5. @lang('messages.Fingers: length and shape')</h4>
            <div class="row">
                <div id="answer1" class="answer col-md-2 col-sm-4 col-xs-4 col-md-offset-3">
                    <div class="thumbnail">
                        <img src="{{asset('images\5_fingers1.png')}}" alt="Image"/>
                    </div>
                    <div class="caption">
                        <p>@lang('messages.Long with pointed ends')</p>
                    </div>
                </div>
                <div id="answer2" class="answer col-md-2 col-sm-4 col-xs-4">
                    <div class="thumbnail">
                        <img src="{{asset('images\5_fingers2.png')}}" alt="Image"/>
                    </div>
                    <div class="caption">
                        <p>@lang('messages.Middle length')</p>
                    </div>
                </div>
                <div id="answer3" class="answer col-md-2 col-sm-4 col-xs-4">
                    <div class="thumbnail">
                        <img src="{{asset('images\5_fingers3.png')}}" alt="Image"/>
                    </div>
                    <div class="caption">
                        <p>@lang('messages.Short fingers')</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="question6">
            <h4 class="text-center">#6. @lang('messages.Skin: color and reaction to the sun')</h4>
            <div class="row">
                <div id="answer1" class="answer col-md-2 col-sm-4 col-xs-4 col-md-offset-3">
                    <div class="thumbnail">
                        <img src="{{asset('images\6_skin1.png')}}" alt="Image"/>
                    </div>
                    <div class="caption">
                        <p>@lang('messages.Dark, easily covered with suntan')</p>
                    </div>
                </div>
                <div id="answer2" class="answer col-md-2 col-sm-4 col-xs-4">
                    <div class="thumbnail">
                        <img src="{{asset('images\6_skin2.png')}}" alt="Image"/>
                    </div>
                    <div class="caption">
                        <p>@lang('messages.Light, burnt in the sun; freckles, birthmarks')</p>
                    </div>
                </div>
                <div id="answer3" class="answer col-md-2 col-sm-4 col-xs-4">
                    <div class="thumbnail">
                        <img src="{{asset('images\6_skin3.png')}}" alt="Image"/>
                    </div>
                    <div class="caption">
                        <p>@lang('messages.Covered with a uniform tan')</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="question7">
            <h4 class="text-center">#7. @lang('messages.Forehead: width, wrinkles')</h4>
            <div class="row">
                <div id="answer1" class="answer col-md-2 col-sm-4 col-xs-4 col-md-offset-3">
                    <div class="thumbnail">
                        <img src="{{asset('images\7_forehead1.png')}}" alt="Image"/>
                    </div>
                    <div class="caption">
                        <p>@lang('messages.Narrow')</p>
                    </div>
                </div>
                <div id="answer2" class="answer col-md-2 col-sm-4 col-xs-4">
                    <div class="thumbnail">
                        <img src="{{asset('images\7_forehead2.png')}}" alt="Image"/>
                    </div>
                    <div class="caption">
                        <p>@lang('messages.Medium width, with wrinkles and folds')</p>
                    </div>
                </div>
                <div id="answer3" class="answer col-md-2 col-sm-4 col-xs-4">
                    <div class="thumbnail">
                        <img src="{{asset('images\7_forehead3.png')}}" alt="Image"/>
                    </div>
                    <div class="caption">
                        <p>@lang('messages.Wide')</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="question8">
            <h4 class="text-center">#8. @lang('messages.Eyes: size and color')</h4>
            <div class="row">
                <div id="answer1" class="answer col-md-2 col-sm-4 col-xs-4 col-md-offset-3">
                    <div class="thumbnail">
                        <img src="{{asset('images\8_eyes1.png')}}" alt="Image"/>
                    </div>
                    <div class="caption">
                        <p>@lang('messages.Small, dark, moving')</p>
                    </div>
                </div>
                <div id="answer2" class="answer col-md-2 col-sm-4 col-xs-4">
                    <div class="thumbnail">
                        <img src="{{asset('images\8_eyes2.png')}}" alt="Image"/>
                    </div>
                    <div class="caption">
                        <p>@lang('messages.Medium width, with wrinkles and folds')</p>
                    </div>
                </div>
                <div id="answer3" class="answer col-md-2 col-sm-4 col-xs-4">
                    <div class="thumbnail">
                        <img src="{{asset('images\8_eyes3.png')}}" alt="Image"/>
                    </div>
                    <div class="caption">
                        <p>@lang('messages.Large, damp, brown, sometimes - blue')</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="question9">
            <h4 class="text-center">#9. @lang('messages.Teeth: size and evenness')</h4>
            <div class="row">
                <div id="answer1" class="answer col-md-2 col-sm-4 col-xs-4 col-md-offset-3">
                    <div class="thumbnail">
                        <img src="{{asset('images\9_teeth1.png')}}" alt="Image"/>
                    </div>
                    <div class="caption">
                        <p>@lang('messages.Uneven, projecting forward')</p>
                    </div>
                </div>
                <div id="answer2" class="answer col-md-2 col-sm-4 col-xs-4">
                    <div class="thumbnail">
                        <img src="{{asset('images\9_teeth2.png')}}" alt="Image"/>
                    </div>
                    <div class="caption">
                        <p>@lang('messages.Smooth, medium')</p>
                    </div>
                </div>
                <div id="answer3" class="answer col-md-2 col-sm-4 col-xs-4">
                    <div class="thumbnail">
                        <img src="{{asset('images\9_teeth3.png')}}" alt="Image"/>
                    </div>
                    <div class="caption">
                        <p>@lang('messages.Large, even, shiny')</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="question10">
            <h4 class="text-center">#10. @lang('messages.Neck: Thickness')</h4>
            <div class="row">
                <div id="answer1" class="answer col-md-2 col-sm-4 col-xs-4 col-md-offset-3">
                    <div class="thumbnail">
                        <img src="{{asset('images\10_neck1.png')}}" alt="Image"/>
                    </div>
                    <div class="caption">
                        <p>@lang('messages.Thin neck')</p>
                    </div>
                </div>
                <div id="answer2" class="answer col-md-2 col-sm-4 col-xs-4">
                    <div class="thumbnail">
                        <img src="{{asset('images\10_neck2.png')}}" alt="Image"/>
                    </div>
                    <div class="caption">
                        <p>@lang('messages.Moderate thickness')</p>
                    </div>
                </div>
                <div id="answer3" class="answer col-md-2 col-sm-4 col-xs-4">
                    <div class="thumbnail">
                        <img src="{{asset('images\10_neck3.png')}}" alt="Image"/>
                    </div>
                    <div class="caption">
                        <p>@lang('messages.Thick')</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="question11">
            <h4 class="text-center">#11. @lang('messages.Chin: size')</h4>
            <div class="row">
                <div id="answer1" class="answer col-md-2 col-sm-4 col-xs-4 col-md-offset-3">
                    <div class="thumbnail">
                        <img src="{{asset('images\11_chin1.png')}}" alt="Image"/>
                    </div>
                    <div class="caption">
                        <p>@lang('messages.Thin, elegant')</p>
                    </div>
                </div>
                <div id="answer2" class="answer col-md-2 col-sm-4 col-xs-4">
                    <div class="thumbnail">
                        <img src="{{asset('images\11_chin2.png')}}" alt="Image"/>
                    </div>
                    <div class="caption">
                        <p>@lang('messages.Moderate')</p>
                    </div>
                </div>
                <div id="answer3" class="answer col-md-2 col-sm-4 col-xs-4">
                    <div class="thumbnail">
                        <img src="{{asset('images\11_chin3.png')}}" alt="Image"/>
                    </div>
                    <div class="caption">
                        <p>@lang('messages.Massive lower jaw')</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="question12">
            <h4 class="text-center">#12. @lang('messages.Weight: easy or difficult to gain or lose')</h4>
            <div class="row">
                <div id="answer1" class="answer col-md-2 col-sm-4 col-xs-4 col-md-offset-3">
                    <div class="thumbnail">
                        <img src="{{asset('images\12_thin.png')}}" alt="Image"/>
                    </div>
                    <div class="caption">
                        <p>@lang('messages.It\'s hard to gain')</p>
                    </div>
                </div>
                <div id="answer2" class="answer col-md-2 col-sm-4 col-xs-4">
                    <div class="thumbnail">
                        <img src="{{asset('images\12_average.png')}}" alt="Image"/>
                    </div>
                    <div class="caption">
                        <p>@lang('messages.It is easy to gain or lose')</p>
                    </div>
                </div>
                <div id="answer3" class="answer col-md-2 col-sm-4 col-xs-4">
                    <div class="thumbnail">
                        <img src="{{asset('images\12_fat.png')}}" alt="Image"/>
                    </div>
                    <div class="caption">
                        <p>@lang('messages.Easy to gain, but difficult to lose without exercise')</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="question13">
            <h4 class="text-center">#13. @lang('messages.Skin: temperature')</h4>
            <div class="row">
                <div id="answer1" class="answer col-md-2 col-sm-4 col-xs-4 col-md-offset-3">
                    <div class="thumbnail">
                        <img src="{{asset('images\13_temp1.png')}}" alt="Image"/>
                    </div>
                    <div class="caption">
                        <p>@lang('messages.Cold hands and feet')</p>
                    </div>
                </div>
                <div id="answer2" class="answer col-md-2 col-sm-4 col-xs-4">
                    <div class="thumbnail">
                        <img src="{{asset('images\13_temp2.png')}}" alt="Image"/>
                    </div>
                    <div class="caption">
                        <p>@lang('messages.Warm')</p>
                    </div>
                </div>
                <div id="answer3" class="answer col-md-2 col-sm-4 col-xs-4">
                    <div class="thumbnail">
                        <img src="{{asset('images\13_temp3.png')}}" alt="Image"/>
                    </div>
                    <div class="caption">
                        <p>@lang('messages.Cool, but not cold')</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="question14">
            <h4 class="text-center">
                #14. @lang('messages.Hair on the head: color, thickness, dryness or fat content')</h4>
            <div class="row">
                <div id="answer1" class="answer col-md-2 col-sm-4 col-xs-4 col-md-offset-3">
                    <div class="thumbnail">
                        <img src="{{asset('images\14_hair1.png')}}" alt="Image"/>
                    </div>
                    <div class="caption">
                        <p>@lang('messages.Dry, dull, with split ends, dark, hard, curly')</p>
                    </div>
                </div>
                <div id="answer2" class="answer col-md-2 col-sm-4 col-xs-4">
                    <div class="thumbnail">
                        <img src="{{asset('images\14_hair2.png')}}" alt="Image"/>
                    </div>
                    <div class="caption">
                        <p>@lang('messages.Thin, fatty, light brown, red or with early graying; early thinning, possibly baldness')</p>
                    </div>
                </div>
                <div id="answer3" class="answer col-md-2 col-sm-4 col-xs-4">
                    <div class="thumbnail">
                        <img src="{{asset('images\14_hair3.png')}}" alt="Image"/>
                    </div>
                    <div class="caption">
                        <p>@lang('messages.Thick, slightly wavy, greasy, dark, shiny')</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="question15">
            <h4 class="text-center">#15. @lang('messages.Climatic conditions: tolerability')</h4>
            <div class="row">
                <div id="answer1" class="answer col-md-2 col-sm-4 col-xs-4 col-md-offset-3">
                    <div class="thumbnail">
                        <img src="{{asset('images\15_climat1.png')}}" alt="Image"/>
                    </div>
                    <div class="caption">
                        <p>@lang('messages.Do not tolerate dryness')</p>
                    </div>
                </div>
                <div id="answer2" class="answer col-md-2 col-sm-4 col-xs-4">
                    <div class="thumbnail">
                        <img src="{{asset('images\15_climat2.png')}}" alt="Image"/>
                    </div>
                    <div class="caption">
                        <p>@lang('messages.Do not tolerate the heat')</p>
                    </div>
                </div>
                <div id="answer3" class="answer col-md-2 col-sm-4 col-xs-4">
                    <div class="thumbnail">
                        <img src="{{asset('images\15_climat3.png')}}" alt="Image"/>
                    </div>
                    <div class="caption">
                        <p>@lang('messages.Tolerance, do not tolerate high humidity')</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="question16">
            <h4 class="text-center">#16. @lang('messages.Inclination to diseases: prevalence of diseases in life')</h4>
            <div class="row">
                <div id="answer1" class="answer col-md-2 col-sm-4 col-xs-4 col-md-offset-3">
                    <div class="thumbnail">
                        <img src="{{asset('images\16_diseases1.png')}}" alt="Image"/>
                    </div>
                    <div class="caption">
                        <p>@lang('messages.To nervous disorders and acute pains')</p>
                    </div>
                </div>
                <div id="answer2" class="answer col-md-2 col-sm-4 col-xs-4">
                    <div class="thumbnail">
                        <img src="{{asset('images\16_diseases2.png')}}" alt="Image"/>
                    </div>
                    <div class="caption">
                        <p>@lang('messages.To diseases with fever, rashes, inflammations')</p>
                    </div>
                </div>
                <div id="answer3" class="answer col-md-2 col-sm-4 col-xs-4">
                    <div class="thumbnail">
                        <img src="{{asset('images\16_diseases3.png')}}" alt="Image"/>
                    </div>
                    <div class="caption">
                        <p>@lang('messages.To edema, fluid retention and mucus, stagnant phenomena')</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="question17">
            <h4 class="text-center">
                #17. @lang('messages.The daily routine: the inclination to perform the daily routine')</h4>
            <div class="row">
                <div id="answer1" class="answer col-md-2 col-sm-4 col-xs-4 col-md-offset-3">
                    <div class="thumbnail">
                        <img src="{{asset('images\17_daily1.png')}}" alt="Image"/>
                    </div>
                    <div class="caption">
                        <p>@lang('messages.Do not like a strict schedule')</p>
                    </div>
                </div>
                <div id="answer2" class="answer col-md-2 col-sm-4 col-xs-4">
                    <div class="thumbnail">
                        <img src="{{asset('images\17_daily2.png')}}" alt="Image"/>
                    </div>
                    <div class="caption">
                        <p>@lang('messages.Love to plan and conduct organizational work')</p>
                    </div>
                </div>
                <div id="answer3" class="answer col-md-2 col-sm-4 col-xs-4">
                    <div class="thumbnail">
                        <img src="{{asset('images\17_daily3.png')}}" alt="Image"/>
                    </div>
                    <div class="caption">
                        <p>@lang('messages.Well work within the strict schedule')</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="question18">
            <h4 class="text-center">#18. @lang('messages.Decision making: easy or difficult')</h4>
            <div class="row">
                <div id="answer1" class="answer col-md-2 col-sm-4 col-xs-4 col-md-offset-3">
                    <div class="thumbnail">
                        <img src="{{asset('images\18_decision1.png')}}" alt="Image"/>
                    </div>
                    <div class="caption">
                        <p>@lang('messages.With difficulty and easily change them')</p>
                    </div>
                </div>
                <div id="answer2" class="answer col-md-2 col-sm-4 col-xs-4">
                    <div class="thumbnail">
                        <img src="{{asset('images\18_decision2.png')}}" alt="Image"/>
                    </div>
                    <div class="caption">
                        <p>@lang('messages.Quickly, clearly see the essence of things')</p>
                    </div>
                </div>
                <div id="answer3" class="answer col-md-2 col-sm-4 col-xs-4">
                    <div class="thumbnail">
                        <img src="{{asset('images\18_decision3.png')}}" alt="Image"/>
                    </div>
                    <div class="caption">
                        <p>@lang('messages.Slowly, you abandon them with great difficulty')</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="question19">
            <h4 class="text-center">
                #19. @lang('messages.Mind: the reaction of the mind in different circumstances (predominantly)')</h4>
            <div class="row">
                <div id="answer1" class="answer col-md-2 col-sm-4 col-xs-4 col-md-offset-3">
                    <div class="thumbnail">
                        <img src="{{asset('images\19_reaction1.png')}}" alt="Image"/>
                    </div>
                    <div class="caption">
                        <p>@lang('messages.Restless, active, mobile')</p>
                    </div>
                </div>
                <div id="answer2" class="answer col-md-2 col-sm-4 col-xs-4">
                    <div class="thumbnail">
                        <img src="{{asset('images\19_reaction2.png')}}" alt="Image"/>
                    </div>
                    <div class="caption">
                        <p>@lang('messages.Aggressiveness, the spirit of competition')</p>
                    </div>
                </div>
                <div id="answer3" class="answer col-md-2 col-sm-4 col-xs-4">
                    <div class="thumbnail">
                        <img src="{{asset('images\19_reaction3.png')}}" alt="Image"/>
                    </div>
                    <div class="caption">
                        <p>@lang('messages.Tranquility, love for leisurely pursuits, without the expenditure of energy')</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="question20">
            <h4 class="text-center">
                #20. @lang('messages.Thinking: according to the innate propensity of the activity of the intellect (predominantly)')</h4>
            <div class="row">
                <div id="answer1" class="answer col-md-2 col-sm-4 col-xs-4 col-md-offset-3">
                    <div class="thumbnail">
                        <img src="{{asset('images\20_thinking1.png')}}" alt="Image"/>
                    </div>
                    <div class="caption">
                        <p>@lang('messages.Creative')</p>
                    </div>
                </div>
                <div id="answer2" class="answer col-md-2 col-sm-4 col-xs-4">
                    <div class="thumbnail">
                        <img src="{{asset('images\20_thinking2.png')}}" alt="Image"/>
                    </div>
                    <div class="caption">
                        <p>@lang('messages.Organized')</p>
                    </div>
                </div>
                <div id="answer3" class="answer col-md-2 col-sm-4 col-xs-4">
                    <div class="thumbnail">
                        <img src="{{asset('images\20_thinking3.png')}}" alt="Image"/>
                    </div>
                    <div class="caption">
                        <p>@lang('messages.Prefer to follow other people\'s ideas and plans')</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="question21">
            <h4 class="text-center">
                #21. @lang('messages.Often experience: in accordance with the manifestations of emotions in different situations (predominantly)')</h4>
            <div class="row">
                <div id="answer1" class="answer col-md-2 col-sm-4 col-xs-4 col-md-offset-3">
                    <div class="thumbnail">
                        <img src="{{asset('images\21_emotions1.png')}}" alt="Image"/>
                    </div>
                    <div class="caption">
                        <p>@lang('messages.Fear or nervousness')</p>
                    </div>
                </div>
                <div id="answer2" class="answer col-md-2 col-sm-4 col-xs-4">
                    <div class="thumbnail">
                        <img src="{{asset('images\21_emotions2.png')}}" alt="Image"/>
                    </div>
                    <div class="caption">
                        <p>@lang('messages.Hatred or anger')</p>
                    </div>
                </div>
                <div id="answer3" class="answer col-md-2 col-sm-4 col-xs-4">
                    <div class="thumbnail">
                        <img src="{{asset('images\21_emotions3.png')}}" alt="Image"/>
                    </div>
                    <div class="caption">
                        <p>@lang('messages.Apathy or irresistible desire')</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="question22">
            <h4 class="text-center">
                #22. @lang('messages.Your internal state: the internal sensations and the state under the influence of changes in the external environment (prevails mainly at this time of year)')</h4>
            <div class="row">
                <div id="answer1" class="answer col-md-2 col-sm-3 col-xs-3 col-md-offset-2">
                    <div class="thumbnail">
                        <img src="{{asset('images\22_internal3.png')}}" alt="Image"/>
                    </div>
                    <div class="caption">
                        <p>@lang('messages.Coldness and dryness (chills with a slight decrease in temperature)')</p>
                    </div>
                </div>
                <div id="answer2_1" class="answer col-md-2 col-sm-3 col-xs-3">
                    <div class="thumbnail">
                        <img src="{{asset('images\22_internal1.png')}}" alt="Image"/>
                    </div>
                    <div class="caption">
                        <p>@lang('messages.Heat and dryness (dry skin sensation)')</p>
                    </div>
                </div>
                <div id="answer2_2" class="answer col-md-2 col-sm-3 col-xs-3">
                    <div class="thumbnail">
                        <img src="{{asset('images\22_internal2.png')}}" alt="Image"/>
                    </div>
                    <div class="caption">
                        <p>@lang('messages.Heat and humidity (sweating)')</p>
                    </div>
                </div>
                <div id="answer3" class="answer col-md-2 col-sm-3 col-xs-3">
                    <div class="thumbnail">
                        <img src="{{asset('images\22_internal4.png')}}" alt="Image"/>
                    </div>
                    <div class="caption">
                        <p>@lang('messages.Coldness and humidity (chills with high humidity)')</p>
                    </div>
                </div>
            </div>
        </div>
        <p>
            <input type="button" class="next btn btn-success btn-sm" value="@lang('messages.Next Question')"/>
        </p>

        <div class="parent1 row">
            <div class="question_numbers btn-group text-center">
                <button type="button" class="b1 b btn btn-default ">1</button>
                <button type="button" class="b2 b btn btn-default disabled">2</button>
                <button type="button" class="b3 b btn btn-default disabled">3</button>
                <button type="button" class="b4 b btn btn-default disabled">4</button>
                <button type="button" class="b5 b btn btn-default disabled">5</button>
                <button type="button" class="b6 b btn btn-default disabled">6</button>
                <button type="button" class="b7 b btn btn-default disabled">7</button>
                <button type="button" class="b8 b btn btn-default disabled">8</button>
                <button type="button" class="b9 b btn btn-default disabled">9</button>
                <button type="button" class="b10 b btn btn-default disabled">10</button>
                <button type="button" class="b11 b btn btn-default disabled">11</button>
            </div>
        </div>
        <div class="parent1 row">
            <div class="question_numbers question_numbers2 btn-group text-center">
                <button type="button" class="b12 b btn btn-default disabled">12</button>
                <button type="button" class="b13 b btn btn-default disabled">13</button>
                <button type="button" class="b14 b btn btn-default disabled">14</button>
                <button type="button" class="b15 b btn btn-default disabled">15</button>
                <button type="button" class="b16 b btn btn-default disabled">16</button>
                <button type="button" class="b17 b btn btn-default disabled">17</button>
                <button type="button" class="b18 b btn btn-default disabled">18</button>
                <button type="button" class="b19 b btn btn-default disabled">19</button>
                <button type="button" class="b20 b btn btn-default disabled">20</button>
                <button type="button" class="b21 b btn btn-default disabled">21</button>
                <button type="button" class="b22 b btn btn-default disabled">22</button>
            </div>
        </div>
        <p>
            <input type="button" class="show_results btn btn-success btn-sm" value="@lang('messages.Show results')"/>
        </p>
        <div class="result text-center">@lang('messages.Your body type')</div>
        <div class="container text-center">
            <div class="row">
                <div class="additionalInfo col-md-4">
                    <span class="resultTitle">@lang('messages.Congenital body constitution')</span>
                    <p id="type1"></p>
                    <div id="percent1" style="width: 300px; height: 300px; margin: 0 auto;"></div>
                </div>
                <div class="resultInfo col-md-4">
                    <span class="resultTitle">@lang('messages.The biotype is currently')</span>
                    <p id="type3"></p>
                    <div id="percent3" style="width: 300px; height: 300px; margin: 0 auto;"></div>
                </div>
                <div class="additionalInfo col-md-4">
                    <span class="resultTitle">@lang('messages.Acquired body constitution')</span>
                    <p id="type2"></p>
                    <div id="percent2" style="width: 300px; height: 300px; margin: 0 auto;"></div>
                </div>
            </div>
            <input type="button" class="show_answers btn btn-success btn-sm"
                   value="@lang('messages.Return to the test')"/>
            <input type="button" class="show_details btn btn-success btn-sm"
                   value="@lang('messages.Show more details')"/>
            <input type="button" class="hide_details btn btn-success btn-sm"
                   value="@lang('messages.Close detailed results')"/>
        </div>
    </div>
</div>
<script>
    function getType(type) {
        switch (type) {
            case "V":
                type = "@lang('messages.Vata')";
                break;
            case "P":
                type = "@lang('messages.Pitta')";
                break;
            case "K":
                type = "@lang('messages.Kapha')";
                break;
            case "VP":
                type = "@lang('messages.Vata - Pitta')";
                break;
            case "PV":
                type = "@lang('messages.Pitta - Vata')";
                break;
            case "VK":
                type = "@lang('messages.Vata - Kapha')";
                break;
            case "KV":
                type = "@lang('messages.Kapha - Vata')";
                break;
            case "PK":
                type = "@lang('messages.Pitta - Kapha')";
                break;
            case "KP":
                type = "@lang('messages.Kapha - Pitta')";
                break;
            case "Sam-Dosha":
                type = "@lang('messages.Sam-Dosha')";
                break;
            case "E1":
                type = "@lang('messages.The internal state you selected does not match the test results. Please review your internal state and pass the test again.')";
                break;
            default:
                type = "@lang('messages.Error1')";
        }
        return type;
    }

    function drawPieChart(type) {
        google.charts.load("current", {packages: ["corechart"]});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var options = {
                width: 300,
                height: 300,
                legend: {position: 'top', alignment: 'center', maxLines: 4}
            };

            var data;
            for (var i = 1; i <= 3; i++) {
                data = google.visualization.arrayToDataTable([
                    ['Language', 'Speakers (in millions)'],
                    ["@lang('messages.Melancholic person')", type.melancholic[i - 1]],
                    ["@lang('messages.Sanguine person')", type.sanguine[i - 1]],
                    ["@lang('messages.Choleric person')", type.choleric[i - 1]],
                    ["@lang('messages.Phlegmatic person')", type.phlegmatic[i - 1]]
                ]);
                var chart = new google.visualization.PieChart(document.getElementById('percent' + i));
                chart.draw(data, options);
            }
        }
    }
</script>
<script src="public/js/main.js"></script>
</body>
</html>
