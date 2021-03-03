<?php include('includes/header.php'); ?>

<div class="container position-absolute top-50 start-50 translate-middle">
    <div class="row">
        <div class="col-sm-1"></div>

        <div class="col-sm-10 text-center mt-5">
            <h1> Welcome to password generator </h1>
            <p class="mt-3">Worry not! Because your password here are not saved by browser or in the server. </p>
            <p class=""> You can generate as much as you want.</p>

        </div>

        <div class="col-sm-1"></div>
    </div>

    <div class="row">
        <div class="col d-flex justify-content-center my-5">
            <h3 id="randPass"><?php echo generate_string($permitted_chars, 20); ?></h3>
        </div>
    </div>

    <div class="row">
        <div class="col d-flex justify-content-center">
            <button class="btn btn-primary" onclick="window.location.href = '/'">Generate Password</button>
        </div>
    </div>
</div>

<?php include('includes/footer.php'); ?>