<div id="navbar">
    <ul>
        <li><?php echo $choiceNavbar;?></li>
        <li><a  id="firstLi" href="messagerieIndex.php?choiceNavbar=home" style="text-decoration: line-through <?php if($choiceNavbar == 'home'){echo  $codeCouleur;}else{echo 'none';} ?> 5px">Home</a></li>
        <li><a href="messagerieIndex.php?choiceNavbar=PrivateChat" style="text-decoration: line-through <?php if($choiceNavbar === 'PrivateChat'){echo  $codeCouleur;}else{echo 'none';} ?> 5px">Private chat</a></li>
        <li><a href="messagerieIndex.php?choiceNavbar=account" style="text-decoration: line-through <?php if($choiceNavbar === 'account'){echo  $codeCouleur;}else{echo 'none';} ?> 5px">Account</a></li>
        <li><a href="messagerieConnection.php">Logout</a></li>
    </ul>   
</div>
