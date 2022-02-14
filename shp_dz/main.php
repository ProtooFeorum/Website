<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="main-page">
        <div class="header">
            <div class="header__name">AbobaShop</div>
            <div class="header__navigation">
                <div class="login navigation-button">Login</div>
                <div class="reg navigation-button">Registration</div>
            </div>
        </div>
        <div class="shop-page">
             <div class="shop-page__menu">
               <div class="menu__content">
                 <div class="menu__search">
                     <input class="search" placeholder="Name of the game...">
                </div>
                 <div class="menu__line"></div>
                 <div class="menu__sorting">
                     <div class="item-sorting">Games for two players</div>
                     <div class="item-sorting">Shooter</div>
                     <div class="item-sorting">Find all Armenians</div>
                     <div class="item-sorting">MMORPG</div>
                     <div class="item-sorting">Sandbox</div>
                     <div class="item-sorting">Casual gaymes</div>
                     <div class="item-sorting">Ukraine Simulator</div>
                     <div class="item-sorting">Battlefield2042 Simulator</div>
                 </div>
                 <div class="menu__button">Search</div>
               </div>
             </div> 
             <div class="shop-page__catalog">
             <?php for($i=0; $i < 15; $i++){  ?>
                <div class="catalog__item">
                    <div class="item-photo">
                        <div class="item-photo-hovered">
                         <div class="photo-title">DOKA 2 TRADE</div> 
                            <div class="photo-lower-text">
                                <p>The Winner in Every Year's Premium Awards "Solovinyi Pomet"</p>
                                <p>The BEST Game Of The 2020s Year</p>
                               <H3> <a href="https://www.youtube.com/watch?v=Xf-8anqrIJ4">SHOW MORE</a> </H3>
                            </div>
                        </div>
                    </div>
                         <div class="item-menu">
                             <div class="item-selection">Buy</div>
                             <div class="item-selection">1000000$</div>
                          </div>
                </div>  
                <?php } ?>
                
             </div>
        </div>
    </div>
</body>
<script src="f.js"></script>
</html>