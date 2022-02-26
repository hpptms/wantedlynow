<!DOCTYPE html>
<html>
	@include('parts.meta')
<body>
<div class="header">
	@include('parts.head')
	<div class="banner text-center">
	  <div class="container">    
			@include('parts.top')
	  </div>
	</div>
	<!-- Privacy -->
	<div class="privacy main-grid-border">
		<div class="container">
			<h2 class="head">Privacy Policy</h2>
				<p>wantedly nowは,ユーザーの個人情報について以下のとおりプライバシーポリシー（以下、「本ポリシー」という。）を定めます。本ポリシーは、どのような個人情報を取得し、どのように利用・共有するか、ユーザーがどのようにご自身の個人情報を管理できるかをご説明するものです。</p>
				<h4>Security:</h4>
				<p class="privacy-para">wantedlynowでは、現在の仕様では個人情報は一切取得、利用致しません。</p>
				<ol class="privacy-start">
					<li>wantedly nowはのWebサイトはSSLに対応しており、WebブラウザとWebサーバーとの通信を暗号化しています。</li>
				</ol>
				<h4 class="use-privay">免責事項</h4>
				<ul class="privacy-start">
					<li>当Webサイトに掲載されている情報の正確さには万全を期していますが、利用者が当社Webサイトの情報を用いて行う一切の行為に関して、当サイトは一切の責任を負わないものとします。</li>
					<li>利用者が当Webサイトを利用したことにより生じた利用者の損害及び利用者が第三者に与えた損害に関して、一切の責任を負わないものとします。</li>
				</ul>
					<h4 class="use-privay">著作権・肖像権</h4>
				<ul class="privacy-start">
					<li>当Webサイト内の文章は、wantedly社から抜き出したものです。よって著作権・肖像権等は無いですが、wantedly社の対応により著作権が発生する場合があります。</li>
				</ul>
				<h4 class="use-privay">リンク</h4>
				<ul class="privacy-start">
					<li>当Webサイトへのリンクは、自由に設置していただいて構いません。ただし、Webサイトの内容等によってはリンク設置をお断りすることがあります。</li>
				</ul>
		</div>	
	</div>
	<!-- // Privacy -->
	<!--footer section start-->		
	@include('parts.footer')
    <!--footer section end-->
</body>
</html>