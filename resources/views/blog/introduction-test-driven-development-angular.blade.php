@extends('layouts.gts')

@section('title', __('BLOG') )

@section('content')

@php
    $classBadge = 'badge bg-light text-dark  fs-6';
    $classSteps = 'text-bold p-3'
@endphp

<div class="page-content bg-white">
		<!-- Banner  -->
		<div class="dlab-bnr-inr style-1 bg-primary" style="background-image: url(images/banner/bnr2.png), var(--gradient-sec);  background-size: cover, 200%; ">
			<div class="container">
				<div class="dlab-bnr-inr-entry">
					<h1>Blog Detail</h1>
					<!-- Breadcrumb Row -->
					<nav aria-label="breadcrumb" class="breadcrumb-row style-1">
						<ul class="breadcrumb">
							<li class="breadcrumb-item"><a href="index.html">Home</a></li>
							<li class="breadcrumb-item">Blog</li>
							<li class="breadcrumb-item active" aria-current="page">Blog Detail</li>
						</ul>
					</nav>
					<!-- Breadcrumb Row End -->
				</div>
			</div>
		</div>
		<!-- Banner End -->
		
		<!-- Blog Large -->
		<section class="content-inner">
			<div class="container">
				<div class="row">
					<div class="col-xl-8 col-lg-8 m-b50">
						<!-- blog start -->
                        <div class="dlab-blog blog-single style-3">
                            <div class="dlab-media rounded-sm">
								<img src="../storage/images/blog/default/thum1.jpg" alt="">
							</div>
							<div class="dlab-info">
								<div class="dlab-meta">
									<ul class="border-0 pt-0">
										<li class="post-date"><i class="flaticon-clock m-r10"></i>7 March, 2020</li>
										<li class="post-author"><i class="flaticon-user m-r10"></i>By <a href="javascript:void(0);"> Johne Doe</a></li>
									</ul>
								</div>
								<h4 class="dlab-title">Introduction au Test-Driven Development en Angular</h4>
								<div class="dlab-post-text">
									<p>Le développement piloté par les tests (Test-Driven Development en anglais) est une approche agile du développement de logiciels qui met l'accent sur l'écriture itérative de tests et du code métier. Le processus TDD comprend trois (03) étapes :</p>
                                    <ul>
                                        <li>écrire un test qui échoue avant d'écrire le code ;</li>
                                        <li>interdire d'écrire un test plus compliqué que nécessaire ;</li>
                                        <li>éviter d'écrire plus de code que nécessaire, mais seulement ce qu'il faut pour réussir le test qui a échoué.</li>
                                    </ul>
									<blockquote class="wp-block-quote is-style-default">
                                        <p class="fw-normal">Ces trois (03) règles fonctionnent ensemble dans le cadre d'un processus appelé le cycle rouge-vert-refactorisation (red-green-refactor en anglais).</p>
                                        <p class="fw-light">Le processus TDD est itératif et implique l'écriture d'un test qui échoue, l'écriture du code pour réussir le test, puis le refactorisation du code pour améliorer sa conception et sa maintenabilité. Le processus est répété jusqu'à ce que le code soit complet. En écrivant d'abord les tests, la méthode TDD garantit que le code est correct et répond aux exigences définies dans les tests. Elle encourage également les développeurs à écrire un code propre, facile à maintenir, à modifier et à faire évoluer.</p>
                                    </blockquote>
									
                                    <p class="fw-light">Dans cet article, nous allons nous concentrer sur l'introduction au TDD en utilisant Angular, un framework JavaScript populaire pour le développement d'applications web. Nous allons créer une application de calculatrice simple pour illustrer les concepts du TDD.</p>
									
                                    
                                    <h4 class="{{$classSteps}} ">Étape 1: Création du projet Angular</h4>
                                    <p>Avant de commencer à développer notre application de calculatrice, nous devons naturellement créer notre projet en utilisant la commande suivante :</p>
                                    <pre><code class="language-js">ng new calculator-app</code></pre>
                                    
                                    
                                    <h4 class="{{$classSteps}}">Étape 2: Création du composant de calculatrice </h4>
									<p>Maintenant que notre projet est créé, nous pouvons commencer à développer notre application de calculatrice. Créez un nouveau composant de calculatrice en utilisant la commande suivante:</p>
                                    <pre><code class="language-js">ng generate component calculator</code></pre>
                                    <p>Cette commande créera un nouveau dossier <span class="{{$classBadge}}"> calculator </span> contenant les fichiers nécessaires pour notre composant de calculatrice. Nous travaillerons dans un premier temps dans le fichier <span class="{{$classBadge}} ">calculator.component.spec.ts</span> .</p>
									
                                    
                                    <h4 class="{{$classSteps}}">Étape 3: Exploration du fichier <span class="{{$classBadge}}">calculator.component.spec.ts </span> </h4>
									<p>Maintenant que notre projet est créé, nous pouvons commencer à développer notre application de calculatrice. Créez un nouveau composant de calculatrice en utilisant la commande suivante:</p>
<pre><code class="language-jsx">
import { ComponentFixture, TestBed } from '@angular/core/testing';
import { CalculatorComponent } from './calculator.component';

describe('CalculatorComponent', () => {
    let calculator: CalculatorComponent; // component a été remplacé par calculator
    let fixture: ComponentFixture<CalculatorComponent>;

    beforeEach(async () => {
    await TestBed.configureTestingModule({
        declarations: [ CalculatorComponent ]
    })
    .compileComponents();

    fixture = TestBed.createComponent(CalculatorComponent);
    calculator = fixture.componentInstance;
    fixture.detectChanges();
    });

    it('should create', () => {
    expect(calculator).toBeTruthy();
    });
});</code></pre>
                                    <p>Dans le code généré ci-dessous, nous avons une suite de tests utilisant la fonction <span class="{{$classBadge}}">describe</span>, qui fournit un nom descriptif pour le composant testé. Dans la suite de tests, nous avons un bloc <span class="{{$classBadge}}">beforeEach</span> pour configurer l'environnement de test. La méthode <span class="{{$classBadge}}">TestBed.configureTestingModule</span> est utilisée pour configurer le module de test et fournir les dépendances nécessaires. La variable <span class="{{$classBadge}}">calculator</span> est ensuite assignée à une instance du <span class="{{$classBadge}}">CalculatorComponent</span> à l'aide de la méthode <span class="{{$classBadge}}">TestBed.inject</span>.</p>

                                    
                                    <h4 class="{{$classSteps}}">Etape 4: Ecriture de notre premier test</h4>
                                    <p>Notre composant <span class="{{$classBadge}}">CalculatorComponent</span> nous permettra d'effectuer des opérations arithmétiques de base. Pour écrire un test unitaire en utilisant le TDD, nous allons commencer par créer un scénario de test qui vérifie le comportement attendu du composant. Nous allons maintenant écrire le scénario de test proprement dit en utilisant la fonction <span class="{{$classBadge}}">it</span>. Dans ce cas, nous allons tester la méthode <span class="{{$classBadge}}">add</span> du <span class="{{$classBadge}}">CalculatorComponent</span> en lui passant deux nombres et en nous attendant à ce que le résultat soit <span class="{{$classBadge}}">5</span>. La fonction <span class="{{$classBadge}}">expect</span> est utilisée pour définir le comportement attendu et vérifier le résultat réel. Ce code doit être ajouté à la suite de tests, c'est-à-dire à l'intérieur de la fonction <span class="{{$classBadge}}">describe</span>.</p>
<pre><code class="language-js">
it('should add two numbers correctly', () => { 
    const result = calculator.add(2, 3); 
    expect(result).toBe(5); 
});                                            
</code></pre>
                                    <h4 class="{{$classSteps}}">Etape 4: Exécution du test</h4>  
                                    <p class="fst-italic">Avant même d'exécuter le test, vous obtenez une erreur dans votre éditeur de code vous indiquant que la fonction add n'existe pas. </p>
                                    <img  src="../storage/images/blog/default/introBlog/introCode.avif" alt="image de code">
                                    <p>C'est normal, puisqu'elle n'a pas encore été créée.</p>
                                    <p class="fst-italic"> Ensuite, en retournant sur notre serveur Karma, nous constatons que notre test case n'est pas affiché dans CalculatorComponent` et dans le terminal, nous avons une erreur liée à l'inexistence de la fonction et un message indiquant qu'aucun test n'a réussi.</p>
                                    <p class="fst-italic">Pas de panique, c'est le rouge du TDD ! Bravo 😂</p>
                                

                                    <h4 class="{{$classSteps}}">Etape 5: Ecriture du code minimum pour que le test passe</h4>
                                    <p>Dans notre classe CalculatorComponent, en suivant l'approche TDD, nous allons écrire le minimum de code nécessaire pour que notre test précédemment écrit passe.</p>
<pre><code class="language-js">
add(a: number, b: number): number { 
    return a + b; 
}                                          
</code></pre>                          
                                    <p>Le résultat sur votre serveur Karma :</p>
                                    <img  src="../storage/images/blog/default/introBlog/karmaImg.avif" alt="image de code">
                                    <p class="pt-5" >Et dans votre terminal :</p>
                                    <img class="pb-4"  src="../storage/images/blog/default/introBlog/itermImg.avif" alt="image de code">
                                    <blockquote>
                                        <p class="fw-light">Nous en sommes à l'étape green du TDD, c'est-à-dire que nous écrivons la quantité minimale de code nécessaire pour que notre test soit réussi.</p> 
                                        <p class="fw-light">C'est très bien !</p>
                                    </blockquote>

                                    <h4 class="{{$classSteps}}">Etape 6: Refactoriser le code</h4>
                                    <p>Une fois les tests réussis, vous pouvez refactoriser le code pour en améliorer la conception, la lisibilité et la maintenabilité. La refactorisation est une étape essentielle du processus TDD, qui permet d'éliminer les doublons, d'améliorer la structure du code et la qualité globale. Il est essentiel de s'assurer que les tests continuent à fonctionner après la refactorisation. La révision et la mise à jour régulière des tests au fur et à mesure de l'évolution de la base de code contribueront à maintenir l'intégrité et la fiabilité des tests unitaires.</p>
                                    <blockquote>
                                        <p class="fw-normal">Maintenant, faites le même exercice pour rajouter les autres types d'opérations qu'on retrouve sur une calculatrice. Vous remarquerez que vous passez plus de temps dans votre éditeur de texte ou IDE que sur le navigateur et dans votre terminal. À aucun moment, vous n'avez eu besoin d'ouvrir votre navigateur sauf pour visualiser quoique ce soit à part le résultat du serveur Karma.</p>
                                        <p class="fw-light ">Pour plus d'informations :</p>
                                        <p>👉 <a class="text-dark fst-italic" href="https://jasmine.github.io/"> Jasmine</a></p>
                                        <p>👉 <a class="text-dark fst-italic" href="https://karma-runner.github.io/latest/index.html"> Karma</a></p>
                                    </blockquote>
                                </div>
                                
								
                                
                                
                                
                                
                                <div class="dlab-meta meta-bottom border-top">
									<div class="post-tags">
											<strong>Tags:</strong>
											<a href="javascript:void(0);">Child</a>,
											<a href="javascript:void(0);">Eduction</a>,
											<a href="javascript:void(0);">Money</a>,
											<a href="javascript:void(0);">Resturent</a>
										</div>
									<div class="dlab-social-icon primary-light">
										<ul>
											<li><a class="fab fa-facebook-f" href="https://www.facebook.com/"  target="_blank"></a></li>
											<li><a class="fab fa-instagram" href="https://www.instagram.com/"  target="_blank"></a></li>
											<li><a class="fab fa-twitter" href="https://www.twitter.com/"  target="_blank"></a></li>
										</ul>
									</div>
								</div>
						   
							</div>
						</div>
						<div class="row extra-blog style-2">
							<div class="col-lg-12 m-b30">
								<h2 class="blog-title">Related Blog</h2>
							</div>
							<div class="col-lg-6 col-md-6">
								<div class="dlab-blog m-b30">
									<div class="dlab-media rounded-md">
										<img src="images/blog/blog-grid/pic1.jpg" alt="">
									</div>
									<div class="dlab-info">
										<h5 class="dlab-title">
											<a href="blog-details-3.html">Fusce sem ligula, imperdiet sed nisi sit amet, euismod posuere dolor.</a>
										</h5>
										<div class="dlab-meta">
											<ul>
												<li class="post-date"><i class="flaticon-clock m-r10"></i>7 March, 2020</li>
												<li class="post-comment"><a href="javascript:void(0);"><i class="flaticon-speech-bubble"></i><span>15</span></a></li>
												<li class="post-share"><i class="flaticon-share"></i>
													<ul>
														<li><a href="javascript:void(0);"><i class="fab fa-facebook-f"></i></a></li>
														<li><a class="fab fa-twitter" href="javascript:void(0);"></a></li>
														<li><a class="fab fa-linkedin-in" href="javascript:void(0);"></a></li>
													</ul>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6">
								<div class="dlab-blog m-b30">
									<div class="dlab-media rounded-md">
										<a href="blog-details-3.html"><img src="images/blog/blog-grid/pic2.jpg" alt=""></a>
									</div>
									<div class="dlab-info">
										<h5 class="dlab-title">
											<a href="blog-details-3.html">Quisque egestas iaculis felis eget placerat ut pulvinar mi elitauctor.</a>
										</h5>
										<div class="dlab-meta">
											<ul>
												<li class="post-date"><i class="flaticon-clock m-r10"></i>7 March, 2020</li>
												<li class="post-comment"><a href="javascript:void(0);"><i class="flaticon-speech-bubble"></i><span>15</span></a></li>
												<li class="post-share"><i class="flaticon-share"></i>
													<ul>
														<li><a href="javascript:void(0);"><i class="fab fa-facebook-f"></i></a></li>
														<li><a class="fab fa-twitter" href="javascript:void(0);"></a></li>
														<li><a class="fab fa-linkedin-in" href="javascript:void(0);"></a></li>
													</ul>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
                        <div class="clear" id="comment-list">
                            <div class="comments-area style-3" id="comments">
                                <h2 class="comments-title">Comments</h2>
                                <div class="clearfix m-t30">
                                    <!-- comment list END -->
                                    <ul class="comment-list">
										<li class="comment">
											<div class="comment-body">
												<div class="comment-author vcard"> 
													<img  class="avatar photo" src="images/testimonials/pic1.jpg" alt=""> 
													<cite class="fn">Celesto Anderson</cite>
												</div>
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
												<div class="reply"> 
													<a href="javascript:void(0);" class="comment-reply-link">
													<i class="fa fa-reply"></i>Reply</a> 
												</div>
											</div>
											<ol class="children">
												<li class="comment odd parent">
													<div class="comment-body">
														<div class="comment-author vcard"> 
															<img  class="avatar photo" src="images/testimonials/pic2.jpg" alt=""> 
															<cite class="fn">Jake Johnson</cite>
														</div>
														<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
														<div class="reply"> 
															<a href="javascript:void(0);" class="comment-reply-link">
															<i class="fa fa-reply"></i>Reply</a> 
														</div>
													</div>
													<!-- list END -->
												</li>
											</ol>
											<!-- list END -->
										</li>
										<li class="comment">
											<div class="comment-body">
												<div class="comment-author vcard"> 
													<img  class="avatar photo" src="images/testimonials/pic1.jpg" alt=""> 
													<cite class="fn">John Doe</cite> 
												</div>
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
												<div class="reply"> 
													<a href="javascript:void(0);" class="comment-reply-link">
													<i class="fa fa-reply"></i>Reply</a> 
												</div>
											</div>
										</li>
									</ul>
                                    <!-- comment list END -->
                                    <!-- Form -->
                                    <div class="comment-respond style-3" id="respond">
                                        <h2 class="comment-reply-title" id="reply-title">Leave Reply <small> <a style="display:none;" href="javascript:void(0);" id="cancel-comment-reply-link" rel="nofollow">Cancel reply</a> </small> </h2>
										<form class="comment-form m-t30" id="commentform" method="post">
                                            <p class="comment-form-author">
                                                <label for="author">Name <span class="required">*</span></label>
                                                <input type="text" name="Author"  placeholder="Author" id="author">
                                            </p>
                                            <p class="comment-form-email">
                                                <label for="email">Email <span class="required">*</span></label>
                                                <input type="text" placeholder="Email" name="email" id="email">
                                            </p>
                                            <p class="comment-form-comment">
                                                <label for="comment">Comment</label>
                                                <textarea rows="8" name="comment" placeholder="Comment" id="comment"></textarea>
                                            </p>
                                            <p class="form-submit">
												<input type="submit" value="Submit Now" class="submit btn gradient btn-primary" id="submit" name="submit">
                                            </p>
                                        </form>
                                    </div>
                                    <!-- Form -->
                                </div>
                            </div>
                        </div>
                        <!-- blog END -->
					</div>
					<div class="col-xl-4 col-lg-4 m-b30">
                        <aside class="side-bar sticky-top">
                            <div class="widget style-1">
                                <div class="search-bx style-1">
                                    <form role="search" method="post">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
												<span class="input-group-text"><i class="la la-search"></i></span>
											</div>
											<input name="text" class="form-control" placeholder="Search" type="text">
                                            <span class="input-group-btn">
												<button type="submit" class="btn btn-primary gradient"><i class="la la-long-arrow-right"></i></button>
                                            </span> 
										</div>
                                    </form>
                                </div>
                            </div>
							<div class="widget widget_categories">
                                <h2 class="widget-title">Category</h2>
                                <ul>
                                    <li class="cat-item cat-item-26"><a href="#">Audio</a> (3)</li>                                         
									<li class="cat-item cat-item-36"><a href="#">Beauty</a> (4)</li>                                         
									<li class="cat-item cat-item-43"><a href="#n">Fashion</a> (3)</li>                                         
									<li class="cat-item cat-item-27"><a href="#">Images</a> (1)</li>                                         
									<li class="cat-item cat-item-40"><a href="#">Lifestyle</a> (3)</li> 
                                </ul>
                            </div>
							<div class="widget recent-posts-entry style-1">
                                <h2 class="widget-title">Recent Posts</h2>
                                <div class="widget-post-bx">
                                    <div class="widget-post clearfix">
                                        <div class="dlab-media"> 
											<a href="blog-details-3.html"><img src="images/blog/recent-blog/pic1.jpg" alt=""></a>
										</div>
                                        <div class="dlab-info">
											<h4 class="title"><a href="blog-details-3.html">Fusce mollis felis quis tristique</a></h4>
                                            <div class="dlab-meta">
												<ul>
													<li class="post-date"> 7 March, 2020 </li>
												</ul>
											</div>
                                        </div>
                                    </div>
                                    <div class="widget-post clearfix">
                                        <div class="dlab-media"> 
											<a href="blog-details-3.html"><img src="images/blog/recent-blog/pic2.jpg" alt=""></a>
										</div>
                                        <div class="dlab-info">
											<h4 class="title"><a href="blog-details-3.html">Fusce mollis felis quis tristique</a></h4>
											<div class="dlab-meta">
												<ul>
													<li class="post-date"> 7 March, 2020 </li>
												</ul>
											</div>
                                        </div>
                                    </div>
                                    <div class="widget-post clearfix">
                                        <div class="dlab-media"> 
											<a href="blog-details-3.html"><img src="images/blog/recent-blog/pic3.jpg" alt=""></a>
										</div>
                                        <div class="dlab-info">
											<h4 class="title"><a href="blog-details-3.html">Fusce mollis felis quis tristique</a></h4>
                                            <div class="dlab-meta">
												<ul>
													<li class="post-date"> 7 March, 2020 </li>
												</ul>
											</div>
                                        </div>
                                    </div>
									<div class="widget-post clearfix">
                                        <div class="dlab-media"> 
											<a href="blog-details-3.html"><img src="images/blog/recent-blog/pic3.jpg" alt=""></a>
										</div>
                                        <div class="dlab-info">
											<h4 class="title"><a href="blog-details-3.html">Fusce mollis felis quis tristique</a></h4>
                                            <div class="dlab-meta">
												<ul>
													<li class="post-date"> 7 March, 2020 </li>
												</ul>
											</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
							<div class="widget widget widget_categories">
                                <h2 class="widget-title">Archives</h2>
                                <ul>
                                    <li><a href="javascript:void(0);">January</a>(3)</li>
                                    <li><a href="javascript:void(0);">Fabruary</a>(4)</li>
                                    <li><a href="javascript:void(0);">March</a>(4)</li>
                                    <li><a href="javascript:void(0);">April</a>(3)</li>
                                    <li><a href="javascript:void(0);">May</a>(4)</li>
                                    <li><a href="javascript:void(0);">Jun</a>(1)</li>
                                    <li><a href="javascript:void(0);">July</a>(4)</li>
                                </ul>
                            </div>
							<div class="widget widget_tag_cloud style-1">
                                <h2 class="widget-title">Tags</h2>
                                <div class="tagcloud"> 
									<a href="javascript:void(0);">Business</a>
									<a href="javascript:void(0);">News</a>
									<a href="javascript:void(0);">Brand</a>
									<a href="javascript:void(0);">Website</a>
									<a href="javascript:void(0);">Internal</a>
									<a href="javascript:void(0);">Strategy</a>
									<a href="javascript:void(0);">Brand</a>
									<a href="javascript:void(0);">Mission</a>
								</div>
                            </div>
                        </aside>
                    </div>
				</div>
			</div>
		</section>
				
	</div>
@endsection