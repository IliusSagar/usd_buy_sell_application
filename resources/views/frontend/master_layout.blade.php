<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="icon" href="./assets/img/favicon-img.ico"> -->
    <title>Usd666 - Dollar Buy Sell | Dollar Buy Sell BD | Nagad To Perfect Money | Dollar Exchange BD | Perfect Money Buy Sell | Webmoney Buy Sell</title>

    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>

      .nav-item {
        letter-spacing: 2px;
      }

      .nav-link::after {
    content: '';
    display: block;
    width: 0;
    height: 3px;
    background: #fff;
    transition: width .7s;
}

.nav-link:hover::after {
    width: 100%;

}


      div.mm-dropdown {
    border: 1px solid #ddd;
    width: 100%;
    border-radius: 3px;
  }

  div.mm-dropdown2 {
    border: 1px solid #ddd;
    width: 100%;
    border-radius: 3px;
  }

  div.mm-dropdown ul {
    list-style: none;
    padding: 0;
    margin: 0;
    border: 0;
  }

  div.mm-dropdown2 ul {
    list-style: none;
    padding: 0;
    margin: 0;
    border: 0;
  }

  div.mm-dropdown ul li,
  div.mm-dropdown div.textfirst {
    padding: 0;
    color: #333;
    border-bottom: 1px solid #ddd;
    padding: 5px 15px;
  }

  div.mm-dropdown2 ul li,
  div.mm-dropdown2 div.textfirst {
    padding: 0;
    color: #333;
    border-bottom: 1px solid #ddd;
    padding: 5px 15px;
  }

  div.mm-dropdown div.textfirst img.down {
    float: right;
    margin-top: 5px
  }

  div.mm-dropdown2 div.textfirst2 img.down {
    float: right;
    margin-top: 5px
  }

  div.mm-dropdown ul li:last-child {
    border-bottom: 0;
  }

  div.mm-dropdown2 ul li:last-child {
    border-bottom: 0;
  }

  div.mm-dropdown ul li {
    display: none;
    padding-left: 25px;
  }

  div.mm-dropdown2 ul li {
    display: none;
    padding-left: 25px;
  }

  div.mm-dropdown ul li.main {
    display: block;
  }

  div.mm-dropdown2 ul li.main {
    display: block;
  }

  div.mm-dropdown ul li img {
    width: 20px;
    height: 20px;
  }

  div.mm-dropdown2 ul li img {
    width: 20px;
    height: 20px;
  }
    </style>



</head>
<body style="background-color: #f0f2f5;">

    <!-- start top bar -->
    <div class="top-bar mt-2">
        <div class="container">
            <div class="row">

                @include('frontend.layouts.top_bar')


            </div>
        </div>
    </div> <!-- end top bar -->

    @include('frontend.layouts.nav_bar')

    @yield('content')


<!-- start main-container -->


<br><br>
 <!-- end main-container -->

 <!-- Start Footer -->

        @include('frontend.layouts.footer')

 <!-- End Footer -->


 <!-- Start Sign In Modal -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel"><i class="fa fa-user"></i> Log In</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>


      </div>

      <form method="POST" action="{{ route('login') }}">
        @csrf

      <div class="modal-body">

        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Email <code>*</code></label>
          <input type="email" class="form-control" id="exampleFormControlInput1" name="email">
        </div>

        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Password <code>*</code></label>
          <input type="password" class="form-control" id="exampleFormControlInput1" name="password">
        </div>

      </div>
      <div class="modal-footer">

        <button type="submit" class="btn btn-primary" style="font-size: 22px;">Login</button>
      </div>

      </form>

    </div>
  </div>
</div>

 <!-- End Sign In Modal -->






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" ></script>

    <script>
      $(function() {
      // Set
      var main = $('div.mm-dropdown .textfirst')
      var li = $('div.mm-dropdown > ul > li.input-option')
      var inputoption = $("div.mm-dropdown .option")
      var default_text = '<img src="https://usdhut.com/images/currencies/PM.png" width="20" height="20"  /> Nagad (পার্সোনাল) BDT';

      // Animation
      main.click(function() {
       // main.html(default_text);
        main.html();
        li.toggle('fast');
      });

      // Insert Data
      li.click(function() {
        // hide
        li.toggle('fast');
        var livalue = $(this).data('value');
        var lihtml = $(this).html();
        main.html(lihtml);
        inputoption.val(livalue);
      });
    });
    </script>

<script>
  $(function() {
  // Set
  var main = $('div.mm-dropdown2 .textfirst2')
  var li = $('div.mm-dropdown2 > ul > li.input-option')
  var inputoption = $("div.mm-dropdown2 .option")
  var default_text = '<img src="https://usdhut.com/images/currencies/PM.png" width="20" height="20"  /> Perfect Money USD';

  // Animation
  main.click(function() {
   // main.html(default_text);
    main.html();
    li.toggle('fast');
  });

  // Insert Data
  li.click(function() {
    // hide
    li.toggle('fast');
    var livalue = $(this).data('value');
    var lihtml = $(this).html();
    main.html(lihtml);
    inputoption.val(livalue);
  });
});
</script>

</body>
</html>
