                    
<?php require_once 'classes/UserCheck.php';
$user=new User($pdo); ?>
<header>
    <nav>
        <div class="nav-wrapper">
            <ul><?php if(!$user->isLoggedIn()):?>
                <div class="title">
                    <h1><a href="index.php">Journal</a></h1>
                </div>
                <?php else:?>
                <div class="title greating-title">
                    <h1>Welcome<br/> <?=ucfirst( $_SESSION["username"]) ?> </h1>
                </div>
                <?php endif ;?> 
                <?php if(!$user->isLoggedIn()):?>
                <div class="nav-login">
                    <form action="partials/login.php" method="POST">
                        <input type="text" name="username" placeholder="Username">
                        <input type="password" name="password" placeholder="Password">
                        <button type="submit" name="submit">Login</button>   
                    </form>

                    <?php else:?>
                    <div class = 'container-logout'>
                        <form action="partials/logout.php" method="POST">
                        <button name="diff-user" class='btn diff-user'>Diffrent user?</button>                        
                        <button name="logout" class='btn logout'>Log out</button>                   
                    </form>
                </div>
                </div>
                <?php endif ; ?>
            </ul>
        </div>
    </nav>
</header>



<!-- <div class="new-entry">
  <h2 class="title">Post a new Entry</h2>
  <form class="form newEntry" action="partials/post_entry.php" method="POST">
    <input type="text" name="title" placeholder="Title">
    <br>
    <textarea name="content" placeholder="Content"></textarea>
    <br>
    <input type="submit" value="Submit">
  </form>
</div> -->