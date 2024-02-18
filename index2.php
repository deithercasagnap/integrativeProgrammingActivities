<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>
<body>
    
    <section class="vh-100" style="background-color: #eee;">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100 border border-danger">
            <div class="col-lg-12 col-xl-11">
                <div class="card text-black" style="border-radius: 25px;">
                <div class="card-body p-md-5 border border-primary">
                    <div class="row justify-content-center">

                    <div class="col-md-10 col-lg-6 col-xl-7 order-2 order-lg-1 border border-danger">

                        <p class="text-center h3 fw-bold mb-5 mx-1 mx-md-4 mt-4">Student Registration Form</p>

                        <form action="process.php" method="post" class="mx-1 mx-md-4">

                            <div class="d-flex flex-row align-items-center mb-4">
                                <!-- <i class="fas fa-envelope fa-lg me-3 fa-fw"></i> -->
                                <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                <div class="form-outline flex-fill mb-0">
                                <input type="text" id="form3Example3c" name="username" class="form-control" placeholder="Username"/>
                                <!-- <label class="form-label" for="form3Example3c">Your Email</label> -->
                                </div>
                            </div>

                            <div class="d-flex flex-row align-items-center mb-4">
                                <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                <div class="form-outline flex-fill mb-0">
                                <input type="password" id="form3Example4c" name="password" class="form-control" placeholder="Password"/>
                                <!-- <label class="form-label" for="form3Example4c">Password</label> -->
                                </div>
                            </div>



                            <div class="d-flex flex-row align-items-center mb-4">
                                <i class="fa-solid fa-address-card fa-lg me-3 fa-fw"></i>
                                <div class="form-outline flex-fill mb-0">
                                    
                                    <div class="d-flex flex-row align-items-center">
                                
                                        <input type="text" id="form3Example1c" class="form-control ms-1" name="firstName" placeholder="First Name"/>   
                                        <input type="text" id="form3Example1c" class="form-control ms-2" name="middleName" placeholder="Middle Name"/>     
                                        <input type="text" id="form3Example1c" class="form-control ms-2" name="lastName" placeholder="Last Name"/>     
                                                                
                                    </div>
                                    
                                </div>
                            </div>

                            <div class="d-flex flex-row align-items-center mb-4">
                                <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                                <div class="form-outline flex-fill mb-0">
                                <input type="number" id="form3Example4cd" name="studentID" class="form-control" placeholder="Student Number"/>
                                <!-- <label class="form-label" for="form3Example4cd">Repeat your password</label> -->
                                </div>
                            </div>

                            <div class="d-flex flex-row align-items-center mb-4">
                                <!-- <i class="fas fa-key fa-lg me-3 fa-fw"></i> -->
                                <i class="fa-solid fa-user-shield fa-lg me-3 fa-fw"></i>
                                <div class="form-outline flex-fill mb-0">
                                <input type="number" id="form3Example4cd" name="role" class="form-control" placeholder="Role"/>
                                <!-- <label class="form-label" for="form3Example4cd">Repeat your password</label> -->
                                </div>
                            </div>

                            <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                <button type="submit" name="register" class="btn btn-primary btn-lg">Register</button>
                            </div>

                        </form>

                    </div>
                    
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
    </section>


</body>
</html>