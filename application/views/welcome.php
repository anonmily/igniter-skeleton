<article class="welcome wrapper equalheight">
	<aside sidebar class="container-fluid sidebarwrap">
		<div class="sidebar column col-lg-2 col-md-2 col-sm-2 col-xs-12">
		<div class="container-fluid">
			
		</div><!-- end containerfluid wrap-->
		</div><!-- end sidebar div-->
	</aside>
	<section class="container-fluid mainwrap">
		<div class="maincontent column col-lg-10 col-lg-offset-2 col-md-10 col-md-offset-2 col-sm-10 col-sm-offset-2 col-xs-11 col-xs-offset-1">
			<article class="introduction container-fluid equalheight">
				<div class="row">
					<div class="intro-left column col-lg-9 col-md-9 col-sm-7 col-xs-12">
						<section>
							<h1>Welcome!</h1>
							<p>This is a basic scaffold for future CodeIgniter projects, primarily using PHP, Bootstrap, and JQuery. Javascript and LESS files are currently compiled with Grunt, and dependencies are managed via bower, npm, and composer.</p>
							<p>This project also includes RESTful API, with an example/template REST controller for reference, using the <a href="https://github.com/chriskacerguis/codeigniter-restserver">CodeIgniter REST Server</a> library.</p>
						</section>
						<section>
							<h1>Installation</h1>
								<code>git clone git@github.com:anonmily/igniter-skeleton.git</code>
								<p>Then, if you want to keep up-to-date with the project, you can add a remote:</p>
								<code>git remote add upstream git@github.com:anonmily/igniter-skeleton.git</code>

								<p>To sync/get new changes:</p>
								<code>git fetch upstream</code><br />
								<code>git checkout master</code><br />
								<code>git merge upstream/master</code>

							<h2>Dependencies</h2>
							<p>Node dependencies can be installed via npm install in the base directory:
								<code>npm install</code>
							</p>
							<p>Bower dependencies can be installed via bower install in the base directory:
								<code>bower install</code>
							</p>
							<p>Grunt auto-compilation can be started by running grunt in the base directory:
								<code>grunt</code>
							</p>

							<h2>Configuration</h2>
							<ul>
								<li>Configuration options (e.g. database, base url, etc) are available inside <code>application > config</code>, just as they are in a typical Codeigniter installation</li>
								<li>The <strong>site name</strong> can be changed in <code>application > config > constants.php</code>. It is currently set as 'Curious Cat Ignition'</li>
								<li>The <strong>base url</strong> must be changed in <code>application > config > config.php</code> for the site to work properly</li>
							</ul>
						</section>
						<section>
							<h1>Notes</h1>
							<ul>
								<li>The document root is in the public folder. In a production server, please set the server document root to this folder; the other application folders should not be publicly accessible.
								<li>The index.php directory paths have been updated (e.g. system --> ../system) to account for the new folder structure</li> 			
								<li>Autoloaded helpers can be added in <code>application > config > autoload.php</code></li>
							</ul>
							
						</section>
					</div>
					<div class="intro-right column col-lg-3 col-md-3 col-sm-5 col-xs-12">
						<section>
							<h1>Folder Structure</h1>
							<ul class="filestructure">
								<li><span data-toggle="tooltip" data-placement="left" title="Usual Codeigniter application files">application</span></li>
								<li><span data-toggle="tooltip" data-placement="left" title="Document root, put assets here">public</span>
									<ul>
										<li class="file">index.php</li>
										<li>css</li>
										<li>fonts</li>
										<li>images</li>
										<li>js</li>
									</ul>
								</li>
								<li><span data-toggle="tooltip" data-placement="left" title="Development, uncompiled files">public_dev</span>
									<ul>
										<li>js</li>
										<li>less</li>
									</ul>
								</li>
								<li><span data-toggle="tooltip" data-placement="left" title="Codeigniter core files">system</span></li>
							</ul>
						</section>
					</div><!-- end right column -->
				</div><!-- end row-->
			</article><!-- end introduction containerfluid-->
		</div><!-- end column wrap-->
	</section>
</article>