<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/amstyle.css">

    <title>Multiuser Management System with Codeigniter by Anupam Mondal</title>
</head>

<body>
    <header id="header-bg" class="pb-3 pt-5">
        <div class="py-5">
            <h2 class="text-center">
                <strong class="h2 px-2 py-4 my-5 bg-white text-primary rounded-circle shadow">UMS</strong>
            </h2>
            <h1 class="h2 text-center text-uppercase text-white txt-shadow mt-5 px-5">
                <strong>Multi user Management System </strong>
            </h1>
        </div>
    </header>
    <section class="my-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-2 col-md-3 col-lg-4"></div>
                <div class="col-12 col-sm-8 col-md-6 col-lg-4">
                    <form>
                        <div class="form-group">
                            <label for="userType">🤓 User type</label>
                            <select class="form-control rounded-0 shadow-none" name="" id="userType">
                                <option selected disabled>Select user type</option>
                                <option value="">Admin</option>
                                <option value="">Manager</option>
                                <option value="">Editor</option>
                                <option value="">User</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="InputEmail">✉ Email address</label>
                            <input type="email" class="form-control rounded-0 shadow-none" id="InputEmail" aria-describedby="emailHelp">
                            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                        </div>
                        <div class="form-group">
                            <label for="InputPassword">🔒Password</label>
                            <input type="password" class="form-control rounded-0 shadow-none" id="InputPassword">
                        </div>
                        <!-- <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="Check1">
                            <label class="form-check-label rounded-0" for="Check1">Remember me</label>
                        </div> -->
                        <button type="submit" class="btn btn-block btn-outline-success rounded-0 shadow-none">👉 Signin</button>
                    </form>
                    <p class="mt-3">
                        <a href="#" class="card-link">🤔 New user!! Create a new account</a>
                    </p>
                    <p>
                        <a href="#" class="card-link">😵 Forget password!! Reset your password</a>
                    </p>
                </div>
                <div class="col-12 col-sm-2 col-md-3 col-lg-4"></div>
            </div>
        </div>
    </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>