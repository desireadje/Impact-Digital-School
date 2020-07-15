<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
        <form role="form" method="post" action="" enctype="multipart/form-data">
                     @csrf
                     <div class="form-group col-md-6">
                         <label>Theme</label>
                         <input type="text" class="form-control" name="therme">
                     </div>
                     <div class="form-group col-md-6">
                         <label>Description</label>
                         <input type="text" class="form-control" name="description">
                     </div>
                     <div class="form-group col-md-6">
                         <label>Formateur</label>
                         <select class="form-control" name="master">
								@foreach($masters as $master)
						           <option value="{{ $master->id }}">{{ $master->name }}</option>
					            @endforeach
							</select>
                     </div>
                     <div class="form-group col-md-6">
                         <label>Cover</label>
                         <input type="file" class="form-control" name="cover">
                     </div>
                     <div class="form-group col-md-6">
                         <label>Heure</label>
                         <input type="text" class="form-control" name="heure">
                     </div>

                     <div class="col-md-12">
                       <button type="submit" class="btn btn-info">Enregistrer</button>
                     </div>
                 </form>
        </div>
    </body>
</html>
