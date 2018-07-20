<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Laravel Vue CRUD Application</title>
    <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
</head>
<body>
<div id="app">
    <div class="d-flex flex-column">
        <div class="d-flex flex-row justify-content-around">
            <div class="d-flex flex-column align-content-around justify-content-end">
                sdd
                <div>

                    <input type="text" class="input-round11" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                </div>
                ds
                <div class="input-group ">

                    <input type="text" class="form-control rounded-0 " aria-label="Default" aria-describedby="inputGroup-sizing-default">
                </div>

                sdf
                <div class="input-group">

                    <input type="text" class="form-control rounded-0 " aria-label="Default" aria-describedby="inputGroup-sizing-default">
                </div>
            </div>
            <div class="d-flex flex-column">

                <img src="https://static.listionary.com/core/img/default-user.png" class="img-circle rounded-circle" alt="Cinque Terre" width="200" height="200">
                <br>
                <div class="d-flex justify-content-center">
                    <button>sds</button>
                    <button>sds</button>
                </div>
            </div>



            <div class="d-flex flex-column align-content-around justify-content-end">
                sdd
                <div>

                    <input type="text" class="input-round11" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                </div>
                ds
                <div class="input-group ">

                    <input type="text" class="form-control rounded-0 " aria-label="Default" aria-describedby="inputGroup-sizing-default">
                </div>

                sdf
                <div class="input-group">

                    <input type="text" class="form-control rounded-0 " aria-label="Default" aria-describedby="inputGroup-sizing-default">
                </div>
            </div>
        </div>
        <br>
        <br>
        <div class="d-flex flex-row justify-content-around">
            <input type="text">
            <input type="text">
            <input type="text">
        </div>
        <br>
        <br>
        <br>
        <div class="d-flex flex-row justify-content-center">
            <button >ثبت تغییرات</button>
        </div>
    </div>
    <div class="d-flex flex-row justify-content-end">
        <div class="d-flex flex-column align-content-start" style="width: 20%" >

            <div id="category" style="background-color: #1b6d85 ; " >
دسته بندی ها
            </div>
            <div id="category" style="background-color: #1b6d85">
                براساس برند

            </div>
            <div id="category" style="background-color: #1b6d85">
                رنگ

            </div>

        </div>


    </div>
</div>
<script>
</script>
<script src="{{asset('js/app.js')}}"></script>
</body>
</html>