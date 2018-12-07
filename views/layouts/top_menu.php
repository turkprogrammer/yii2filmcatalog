<?php use app\models\Film;?>
<div class="menu-area floatright hidden-xs ">
								<nav>
									<ul>
										<li><a href="/">Главная</a>							
										</li>
										<li><a href="/category/">Категории</a></li>
                                                                                <li><a href="/site/about/">О сайте</a></li>
                                                                                
										<li><a href="/film/">Все фильмы <span class="label label-danger"><?= $model = Film::find()->count();?></span></a>
											<ul class="submenu">
                                                                                            
												<li><?= app\components\CatsWidget::widget() ?></li>
												
											</ul>
										</li>
										
										<li><a href="/contact">Контакты<i class="fa fa-envelope-o"></i></a>
											
										
									</ul>
								</nav>
							</div>
							<div class="mobile-menu-area visible-xs">
								<div class="container">
									<div class="mobile-menu">
										<nav id="mobile-menu">
											<ul>
										<li><a href="/">Главная</a>									
										</li>
                                                                                <li><a href="/site/about/">О сайте</a></li>
										<li><a href="/category/">Категории</a></li>
										<li><a href="/film/">Все фильмы</a>
											<ul class="submenu">
                                                                                            
												<li><?= app\components\CatsWidget::widget() ?></li>
												
											</ul>
										</li>
										
										<li><a href="/contact">Контакты<i class="fa fa-envelope-o"></i></a>
											
										
									</ul>
										</nav>
									</div>
								</div>
							</div>