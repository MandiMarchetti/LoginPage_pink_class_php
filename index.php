<?php
class LoginPage
{
    private $name;
    private $phone;
    private $email;
    private $password;

    public function __construct()
    {
        $this->name = "";
        $this->phone = "";
        $this->email = "";
        $this->password = "";
    }

    private function register()
    {
        // Aqui você pode adicionar a lógica para processar o registro
        // Lembre-se de ajustar a URL e os parâmetros conforme necessário
        // Exemplo: $url = "http://localhost:3000/register";
        // Exemplo: $data = ["name" => $this->name, "phone" => $this->phone, "email" => $this->email, "password" => $this->password];
        // Exemplo: $response = $this->makePostRequest($url, $data);
        // Exemplo: var_dump($response);
    }


    public function render()
    {
        // Renderiza a página HTML
?>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
            <link rel="stylesheet" href="index.css">
            <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.9/css/unicons.css">
            <title>Login Page ;) </title>
        </head>


        <body>
            <div class="section">
                <div class="container">
                    <div class="row full-height justify-content-center">
                        <div class="col-12 text-center align-self-center py-5">
                            <div class="section pb-5 pt-5 pt-sm-2 text-center">
                                <h6 class="mb-0 pb-3">
                                    <span>Log In </span>
                                    <span>Sign Up</span>
                                </h6>
                                <input class="checkbox" type="checkbox" id="reg-log" name="reg-log" />
                                <label for="reg-log"></label>
                                <div class="card-3d-wrap mx-auto">
                                    <div class="card-3d-wrapper">
                                        <div class="card-front">
                                            <div class="center-wrap">
                                                <div class="section text-center">
                                                    <h4 class="mb-4 pb-3">Log In</h4>
                                                    <div class="form-group">
                                                        <input type="email" class="form-style" placeholder="Email" name="email" />
                                                        <i class="input-icon uil uil-at"></i>
                                                    </div>
                                                    <div class="form-group mt-2">
                                                        <input type="password" class="form-style" placeholder="Password" name="password" />
                                                        <i class="input-icon uil uil-lock-alt"></i>
                                                    </div>
                                                    <a href="/" class="btn mt-4">
                                                        Login
                                                    </a>
                                                    <p class="mb-0 mt-4 text-center">
                                                        <a href="#" class="link">
                                                            Forgot your password?
                                                        </a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- ------------------- SING IN ------------- -->
                                        <div class="card-back">
                                            <div class="center-wrap">
                                                <div class="section text-center">
                                                    <form method="POST">
                                                        <h4 class="mb-3 pb-3">Sign Up</h4>
                                                        <div class="form-group">
                                                            <input type="text" class="form-style" placeholder="Full Name" name="name" onchange="this.submit();" value="<?php echo htmlspecialchars($this->name); ?>" />
                                                            <i class="input-icon uil uil-user"></i>
                                                        </div>
                                                        <div class="form-group mt-2">
                                                            <input type="tel" class="form-style" placeholder="Phone Number" name="phone" onchange="this.submit();" value="<?php echo htmlspecialchars($this->phone); ?>" />
                                                            <i class="input-icon uil uil-phone"></i>
                                                        </div>
                                                        <div class="form-group mt-2">
                                                            <input type="email" class="form-style" placeholder="Email" name="email" onchange="this.submit();" value="<?php echo htmlspecialchars($this->email); ?>" />
                                                            <i class="input-icon uil uil-at"></i>
                                                        </div>
                                                        <div class="form-group mt-2">
                                                            <input type="password" class="form-style" placeholder="Password" name="password" onchange="this.submit();" value="<?php echo htmlspecialchars($this->password); ?>" />
                                                            <i class="input-icon uil uil-lock-alt"></i>
                                                        </div>
                                                        <button class="btn mt-4" type="button" onclick="<?php $this->register(); ?>">
                                                            Register
                                                        </button>
                                                        <!-- <a href="#" class="btn mt-4">
                                                            Register
                                                        </a> -->
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        </body>

        </html>
<?php
    }
}

// Uso da classe LoginPage
$page = new LoginPage();
$page->render();
?>