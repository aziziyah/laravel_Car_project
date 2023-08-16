<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Create Page</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="style/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway';
                font-weight: 100;
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
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
         <link rel="stylesheet" href="style.css">
    </head>
    <body>
        

            <div class="content">
                <div class="title m-b-md">
                Create Page
                </div>

                <div>
<nav>
<a href="/welcome">Home</a>
<a href="/about">About</a>
<a href="/contact">Contact</a>
<a href="/Datas">Cars</a>
<a href="/create">Create</a>
<a href="/edit">edit</a>

</nav>
</div>
            </div>
        </div>
        <div>
            <h1 style="text-align: center;">Create new car</h1>
        </div>
        <div>

        <form action="{{route('Datas.store')}}"   method="post"    class="form bg-white p-6 border-1">
            @csrf
       
         
        <div class="flex justify-center">
         <label for="car-name">Car Name</label>
         <input type="text" id="car-name" name="car-name">   
         <div>
         @error('car-name') 
         {{$message}}
         @enderror
         </div>
        </div>

        <div>
         <label for="car-country">Car Country</label>
         <input type="text" id="car-country" name="car-country" >  
         <div>
         @error('car-country') 
         {{$message}}
         @enderror 
         </div>
        </div>

        <div>
         <label for="car-model">Car Model</label>
         <input type="text" id="car-model" name="car-model" >  
         <div>
         @error('car-model') 
         {{$message}}
         @enderror
         </div>
        </div>
        
        <div>
         <label for="car-price" > Car Price</label>
         <input type="text" id="car-price" name="car-price" > 
         <div>
         @error('car-price') 
         {{$message}}
         @enderror
         </div>

        </div>
        <div>
            <button type="submit">Submit</button>
        </div>
        </form>
        </div>
    
    </body>
</html>