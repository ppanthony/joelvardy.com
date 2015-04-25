<div class="post">

	<h2>Permission Based Authentication Library</h2>
	<h4 class="date">Posted: <date>27th September 2013</date></h4>

	<p>I can't count the number of authentication libraries I have written since I started building websites, often I would simply iterate on the previous library each time I wrote one.</p>

	<p>Last year, while I was working on several CodeIgniter projects I wrote (and released) an authentication library. This served it's purpose however it did not have any permissions, and of course, was limited to being used within CodeIgniter projects. I needed an authentication library in a current project, so decided to write a new <a href="https://github.com/joelvardy/authentication" title="Open source repository" data-analytics="Authentication Library repo">authentication library</a> which I've released as a Composer package. In this post I'm going to explain how the permission control works.</p>

	<h3>Previously</h3>
	<p>Most of my previous authentication libraries had rudimentary access controls, for example:</p>
<pre><code class="language-php">if ($user->is_admin() || $user->is_mod() || $user->is_super_admin()) {
    // This user can moderate comments
}

if ($user_level == 1 || $user_level == 2 || $user_level == 0) {
    // This user can moderate comments
}</code></pre>
	<p>Both of these examples will soon result in code which is hard to maintain. It is also easy to accidentally grant permission to the wrong type of user.</p>

	<h3>Much Better</h3>
	<p>Before I started writing the library I wrote the code below:</p>
<pre><code class="language-php">if ($auth->permission('moderate-comments')) {
    // This user can moderate comments
}</code></pre>
	<p>As you can see this code is quiet succinct, the rule doesn't need changing if a new type of user is added, and it is self-descriptive.</p>

	<h3>The Tables</h3>
	<p>Like most developers, as soon as I had written the three lines above, I was already thinking about the database schema. There are three tables, which are described below:</p>
	<ul>
		<li><strong>permission</strong> - this table holds each possible permission, in the example above this would be <code>moderate-comments</code>.</li>
		<li><strong>group</strong> - each user is assigned to a group, the groups are listed in this table, for example <strong>admin</strong>.</li>
		<li><strong>group_permission</strong> - This is the <a href="http://en.wikipedia.org/wiki/Junction_table" data-analytics="link table on Wikipedia">link table</a> between the group and the permissions which apply to that group.</li>
	</ul>

	<h3>Database Connection</h3>
	<p>I have wanted to write a Composer authentication package ever since I <strong>saw the light</strong> (realised how amazing Composer was) - the problem, not everyone connects to their database in the same way. I thought long and hard about how to accommodate everyone.</p>
	<p>In the end I decided to just make it work for me, and get a version out there, because I can always refactor the library so it uses the Doctrine DBAL at a later point.</p>

	<h3>Links</h3>
	<p>You can view the authentication library <a href="https://github.com/joelvardy/authentication" title="Open source repository" data-analytics="Authentication Library repo">source code</a>, or view the library on <a href="https://packagist.org/packages/joelvardy/authentication" title="Authentication package" data-analytics="Authentication Library package">Packagist.org</a>.</p>
	<p>In case you are interested here is a link to the <a href="https://github.com/joelvardy/Basic-CodeIgniter-Authentication" title="Open source repository" data-analytics="CodeIgniter Authentication repo">CodeIgniter authentication library</a> I wrote.</p>

</div>
