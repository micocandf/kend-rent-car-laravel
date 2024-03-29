<!doctype html>
<html lang=en>

<head>
    <meta charset=UTF-8 />
    <meta name=description content="Free coming soon template">
    <meta name=author content="Pawel Zuchowski">
    <meta name=viewport content="width=device-width,initial-scale=1" />
    <meta http-equiv=X-UA-Compatible content="ie=edge" />
    <link rel=stylesheet href=https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css
        integrity=sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO crossorigin=anonymous>
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel=stylesheet>
    <link href="https://fonts.googleapis.com/css2?family=Muli:wght@300;700&display=swap" rel=stylesheet>
    <link rel=stylesheet href="https://fonts.googleapis.com/css?family=Roboto&display=swap">
    <script src=https://kit.fontawesome.com/3c09bcb51a.js></script>
    <title>Comming Soon</title>
    <link href="{{asset('style_coming-soon/styles/main.css')}}" rel="stylesheet">
</head>

<body>
    <div class=container>
        <div class=row>
            <div class="left-wrap col-12 col-md-5">
                <div class=left>
                    <p><span class=days></span><span class=small> days</span></p>
                    <p><span class=hours></span><span class=small> hours</span></p>
                    <p>&nbsp;&nbsp;<span class=minutes></span><span class=small> minutes</span></p>
                    <p>&nbsp;&nbsp;<span class=seconds></span><span class=small> seconds</span></p>
                </div>
            </div>
            <div class="col-12 col-md-7 right">
                <div class=mainInfo>
                    <h1>COMING SOON</h1>
                    <p class=slogan>Semua project sedang dalam tahap pengerjaan oleh tim, jika ada pertanyaan lebih lanjut silahkan hubungi kami. </p>
                    <form class=form-subscribe action=#> <input type=email class=form placeholder="Your eamil address"
                            required> <button type=submit>Subscribe</button> </form>
                </div>
                <ul class=icon-list>
                    <li class=icon><a class=facebook href=google.com></a></li>
                    <li class=icon><a class=instagram href=google.com></a></li>
                </ul>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="{{asset('style_coming-soon/scripts/bundle.js')}}"></script>
 
</body>

</html>