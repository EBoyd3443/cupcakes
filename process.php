<?php
    /* Eric Boyd
     * 4Apr2024
     * SDev 328
     */
    echo "<p>Thank you, $_POST[name], for your order!</p>
          <p>Order Summary:</p>
          <ul>";
    $flavors = $_POST['flavor'];
    $total = 0;
    foreach($flavors as $flavor)
    {
        echo "<li>$flavor</li>";
        $total += 3.50;
    }
    echo"</ul>
         <p>Order Total: $$total</p>";

