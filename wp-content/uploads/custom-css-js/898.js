<!-- start Simple Custom CSS and JS -->
<script type="text/javascript">
(function(){
					let mainEle = document.getElementById('pg-w5a75f5e505d64-1');
					mainEle.addEventListener('mouseover',ffHandler);
			})();
			function ffHandler(event){
				let eventTarget = event.target.closest('button');
				if(!eventTarget){return;}	
				let showHide = eventTarget.parentElement.previousElementSibling;
				let  ele = showHide.children[0];
				ele.classList.toggle("ffMoreData");
				if(eventTarget.children[0].innerHTML == "Read More"){
					eventTarget.children[0].innerHTML = "Read Less";
					eventTarget.children[0].title = "Read Less";
				}
				else{
					eventTarget.children[0].innerHTML = "Read More";
					eventTarget.children[0].title = "Read More";
				}
			}
</script></script>
<!-- end Simple Custom CSS and JS -->
