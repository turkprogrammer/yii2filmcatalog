<div class="menu-area floatright hidden-xs ">
								<nav>
									<ul>
										<li><a href="/">Главная</a>							
										</li>
										<li><a href="/category/">Категории <i class="fa fa-list" aria-hidden="true"></i></a></li>
                                                                                <li><a href="/site/about/">О сайте</a></li>
                                                                                <li><a href="/actors/">Актеры <span class="label label-danger"><?= $model = app\models\Actors::find()->count();?></span></a></a></li>
										<li><a href="/film/">Все фильмы <span class="label label-danger"><?= $model = app\models\Film::find()->count();?></span></a>
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
                                                                                <li><a href="/actors/">Актеры</a></li>
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