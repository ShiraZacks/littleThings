<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Appreciate the small joys of life! Take the time to appreciate the little things in life. Contact us today!">
    <meta name="title" content="Little Things in Life || Contact">
    <title>Little Things || Contact</title>
    <link rel="stylesheet" type="text/css" href="style.css?<?= time() ?>" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Della+Respira&family=Fondamento&family=Macondo&family=Satisfy&display=swap" rel="stylesheet">
    <script defer type="text/javascript" charset="utf-8" src="script.js?<?= time() ?>"></script>
    <link rel="icon" type="image/png" href="icons/happiness.png">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script>
        function onSubmit(token) {
            document.getElementById("contact-form").submit();
            document.location.href = 'thankYouForm.php';
        }
    </script>
</head>

<body>
    <img class="sideRight" src="icons/flower_1.png">
    <img class="sideLeft" src="icons/flower_1.png">

    <div class='form'>
        <?php

        $errors = [];
        $errorMessage = '';

        if (!empty($_POST)) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $message = $_POST['message'];

            if (empty($name)) {
                $errors[] = 'Name is empty';
            }

            if (empty($email)) {
                $errors[] = 'Email is empty';
            } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $errors[] = 'Email is invalid';
            }

            if (empty($message)) {
                $errors[] = 'Message is empty';
            }

            if (empty($errors)) {
                $toEmail = 'hello@littlethingsinlife.org';
                $emailSubject = 'LittleThingsInLife';
                $headers = ['From' => $email, 'Reply-To' => $email, 'Content-type' => 'text/html; charset=utf-8'];
                $bodyParagraphs = ["Name: {$name}", "Email: {$email}", "Message:", $message];
                $body = join(PHP_EOL, $bodyParagraphs);

                if (mail($toEmail, $emailSubject, $body, $headers)) { ?>
                    <script>
                        document.location.href = 'thankYouForm.php';
                    </script><?php
                            }
                        } else {
                            $errorMessage = 'Oops, something went wrong. Please try again later! Or, email me directly at hello@littlethingsinlife.org';
                        }
                    } else {

                        $allErrors = join('<br/>', $errors);
                        $errorMessage = "<p style='color: red;'>{$allErrors}</p>";
                    }
                                ?>

        <form method="post" id="contact-form" autocomplete="off">
            <div class="sectionTextDark">
                <h2 class="logo"><span class="spacerSpan">〖</span>Contact me!<span class="spacerSpan">〗</span></h2>
                <h3>I look foward to hearing from you!</h3>
                <?php echo ((!empty($errorMessage)) ? $errorMessage : '') ?>
            </div>
            <label class="formLabel">Name:</label>
            <input name="name" type="text" class="formInput" />
            <label class="formLabel">Email Address:</label>
            <input name="email" type="text" class="formInput" />
            <label class="formLabel">Message:</label>
            <textarea name="message" class="formInput"></textarea>
            <div class="submitButton">
                <button class="g-recaptcha formSend" data-sitekey="6LfMjOUoAAAAAE1SOxDr_3WCRu1YF-qsk_c-Pffy" data-callback='onSubmit' type="submit" value="Send">Send</button>
            </div>
        </form>

        <script src="//cdnjs.cloudflare.com/ajax/libs/validate.js/0.13.1/validate.min.js"></script>
        <script>
            const constraints = {
                name: {
                    presence: {
                        allowEmpty: false
                    }
                },
                email: {
                    presence: {
                        allowEmpty: false
                    },
                    email: true
                },
                message: {
                    presence: {
                        allowEmpty: false
                    }
                }
            };

            const form = document.getElementById('contact-form');
            form.addEventListener('submit', function(event) {

                const formValues = {
                    name: form.elements.name.value,
                    email: form.elements.email.value,
                    message: form.elements.message.value
                };


                const errors = validate(formValues, constraints);
                if (errors) {
                    event.preventDefault();
                    const errorMessage = Object
                        .values(errors)
                        .map(function(fieldValues) {
                            return fieldValues.join(', ')
                        })
                        .join("\n");

                    alert(errorMessage);
                }
            }, false);
        </script>


    </div>

    <footer class="sectionTextDark footerFormPage centerText">
        <p><a class="light" href="index.php">Home</a> <a class="light" href="addLittleThing.php">Share your little things</a></p>
        <p>&copy; <?php echo date("Y"); ?> Little Things In Life <a href="https://shirazacks.github.io/">Shira Zacks</a></p>
    </footer>
</body>

</html>