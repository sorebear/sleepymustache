{{ #include header }}
	{{ #each project in our_projects }}
		<article>
			<header>
				<h2>{{ project.title }}</h2>
            <p>
               <a href="{{ project.live_link }}" target="_blank">View Live</a> - 
               <a href="{{ project.git_link }}" target="_blank">View GitHub</a>
				<p class="metadata">{{ project.author }}</p>
			</header>
			<p>{{ project.description }}</p>
		</article>
	{{ /each }}
{{ #include footer }}