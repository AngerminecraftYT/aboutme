<?php
//Get username
$user = $_GET['u'];
?>
<html>
    <head>
        <title>IuCC - Chat</title>
        <link rel="stylesheet" type="text/css" href="css/chat.css" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800" rel="stylesheet" text="text/css">
        <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
        <body>
            <div class="chatContainer">
                <div class="chatHeader">
                    <h3>Welcome <?php echo ucwords($user); ?></h3>
                </div>
                <div class="chatMessages">

                </div>
                <div class="chatBottom">
                    <form action="#" onSubmit='return false;' id='chatForm'>
                        <input type='hidden' id='name' value="<?php echo $user; ?>" />
                        <input type='text' name='text' id='text' value='' placeholder='Message here...' />
                        <input type='submit' name='submit' value='Send' />
                        
                    </form>
                </div>

            </div>
        </body>
    </head>
</html>