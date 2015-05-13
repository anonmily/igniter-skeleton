<article class="welcome row">
	<section class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
		<div class="introduction container-fluid">
			<section>
				<h1>Welcome!</h1>
				<p>This is a skeleton for web development projects with Codeigniter. This project is primarily PHP based, using both Bootstrap and JQuery.</p>
			</section>
			<section>
				<h3>Install Dependencies</h3>
				<p>Node dependencies can be installed via npm install in the base directory:
					<code>npm install</code>
				</p>
				<p>Bower dependencies can be installed via bower install in the base directory:
					<code>bower install</code>
				</p>
				<p>Grunt auto-compilation can be started by running grunt in the base directory:
					<code>grunt</code>
				</p>
			</section>
			<section>
				<h3>Folder structure</h3>
				<ul class="filestructure">
					<li>application	<span class="explanation">Usual Codeigniter Application Files</span></li>
					<li>public <span class="explanation">Document root, put assets here</span>
						<ul>
							<li class="file">index.php</li>
							<li>css</li>
							<li>fonts</li>
							<li>images</li>
							<li>js</li>
						</ul>
					</li>
					<li>public_dev <span class="explanation">Development, precompiled files</span>
						<ul>
							<li>js</li>
							<li>less</li>
						</ul>
					</li>
					<li>system <span class="explanation">Codeigniter core files</span></li>
				</ul>
			</section>
		</div>
	</section>
	<aside class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
		<div class="container-fluid">
			<h2>Notes</h2>
			<ul>
				<li>The document root is in the public folder. In a production server, please set the server document root to this folder; the other application folders should not be publicly accessible.

				<li>The <strong>site name</strong> can be changed in <code>application > config > constants.php</code>. It is currently set as 'Curious Cat Ignition'</li>

				<li>The <strong>base url</strong> must be changed in <code>application > config > config.php</code> for the site to work properly</li>
				
				<li>The index.php directory paths have been updated (e.g. system --> ../system) to account for the new folder structure</li> 
				
				<li>Configuration options (e.g. database, base url, etc) are available inside <code>application > config</code>, just as they are in a typical Codeigniter installation</li>

				<li>Autoloaded helpers can be added in <code>application > config > autoload.php</code></li>
			</ul>
		</div>
	</aside>
</article>