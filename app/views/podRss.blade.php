<?xml version="1.0" encoding="UTF-8"?>
<rss version="2.0" xmlns:atom="http://www.w3.org/2005/Atom" xmlns:cc="http://web.resource.org/cc/" xmlns:itunes="http://www.itunes.com/dtds/podcast-1.0.dtd" xmlns:media="http://search.yahoo.com/mrss/" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#">
	<channel>
		<title>Onödigt men kul - OMK</title>
		<description>En pod om allt kring studentlivet, främst helt onödig men ibland lite kul</description>
		<link>http://www.onödigtmenkul.com/</link>
		<lastBuildDate>Tue, 30 Dec 2014 02:32:23 GMT</lastBuildDate>
		<pubDate>Thu, 10 Mar 2011 14:12:44 GMT</pubDate>
		<ttl>120</ttl>
		<language>sv</language>
		<copyright>Johan Axelsson 2015</copyright>
		<managingEditor>Joaxax@gmail.com (Johan Axelsson)</managingEditor>
		<image>
			<url>http://www.on%F5digtmenkul.se/bilder/logo.jpg</url>
			<title>Onödigt Men Kul</title>
			<link>http://www.On%F5digtmenkul.se</link>
		</image>
		<itunes:image href="http://www.on%F5digtmenkul.se/bilder/logo.jpg" ></itunes:image>
		<itunes:subtitle> Onödigt Men Kul - OMK </itunes:subtitle>
		<itunes:author>Johan Axelsson och Martin Högberg</itunes:author>
		<itunes:summary>En pod om allt kring studentlivet, främst helt onödig men ibland lite kul.</itunes:summary>
		<itunes:new-feed-url>http://rss.acast.com/tsknas</itunes:new-feed-url>
		<atom:link rel="self" type="application/rss+xml" href="http://rss.acast.com/tsknas" > </atom:link>
		<itunes:owner>
			<itunes:name>Johan Axelsson</itunes:name>
			<itunes:email>joaxax@gmail.com</itunes:email>
		</itunes:owner>
		<itunes:explicit>no</itunes:explicit>
		<itunes:keywords>Student, sverige, Lärare, Kul, Humor</itunes:keywords>
		<itunes:category text="Comedy">
		</itunes:category>
		<media:credit role="author">Johan Axelsson, Martin Högberg</media:credit>
		<media:rating>nonadult</media:rating>
		<media:description type="html">En pod om allt kring studentlivet, främst helt onödig men ibland lite kul.</media:description>

		@foreach ($episodes as $episode)
			<item>
				<title>{{$episode->name}}</title>

				<pubDate>{{$episode->created_at}}</pubDate>
				<itunes:duration>{{$episode->length}}</itunes:duration>
				<itunes:keywords>{{$episode->keywords}}</itunes:keywords>
				<itunes:explicit>no</itunes:explicit>
				<itunes:image href="http://az592690.vo.msecnd.net/media/v1/eefb324a-b7cc-4f42-b0ad-401f0afe9791/208123-176082289107075-613530-n.jpg"></itunes:image>
				<description>{{$episode->description}}</description>
				<enclosure url="http://192.168.1.131/episodes/{{$episode->url}}" length="1000" type="audio/mpeg" />
			</item>

		@endforeach

	</channel>
</rss>
