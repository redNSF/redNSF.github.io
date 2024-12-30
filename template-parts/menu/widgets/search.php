<?php

?>

<div class="header__search-icon">
    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path d="M16.57,16.15A9,9,0,1,0,15,17.46h0l6.25,6.25,1.42-1.42Zm-3-.14a7.07,7.07,0,1,1,1.56-1.28A6.88,6.88,0,0,1,13.59,16Z"/>
    </svg>
</div>

<div class="header__search-modal">

    <button class="header__search--close-btn">
        <svg class="icon icon--sm" viewBox="0 0 24 24">
            <title>Close modal window</title>
            <g fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <line x1="3" y1="3" x2="21" y2="21"></line>
                <line x1="21" y1="3" x2="3" y2="21"></line>
            </g>
        </svg>
    </button>

    <div class="header__search--inner">

        <?php 

            if ( MOST_WOOCOMMERCE ) {
            
                most_search_woo();

            } else {
                get_search_form();
            }
            
        ?>

    </div>
</div>