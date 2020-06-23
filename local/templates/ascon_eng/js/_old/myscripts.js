/*ТАБЫ =====================================================
			<ul class="tabs">
				<li class="active"><a href="#tab1">1</a></li>
				<li><a href="#tab2">2</a></li>
			</ul>
			<div class="clb"></div>
			<div class="tab_container">
				<div class="tab_content" id="tab1">
					1
				</div>
				<div class="tab_content" id="tab2">
					2
				</div>
			</div>

			ul.tabs { list-style: none;
				li { 
					a {
						&:hover {}
					}
				}	
				li.active {
					a {}
				}
			}
			.tab_container {
				.tab_content {}
			}

*/
$(document).ready(function(){
	$(".tab_content").hide();
	$("ul.tabs li:first").addClass("active").show();
	$(".tab_content:first").show();
	$("ul.tabs li").click(function(){
	$("ul.tabs li").removeClass("active");
	$(this).addClass("active");
	$(".tab_content").hide();
	var activeTab = $(this).find("a").attr("href");
	$(activeTab).fadeIn();
	return false;});
});

/* ВСПЛЫВАЮЩИЕ ОКНА =====================================================
			<a href="#" class="trigger">Открыть</a>
			<div class="panel">
				<a href="#" class="trigger">x</a>
			</div>

			.panel {
				position:fixed; top:0; right:0; display:none;
					a.trigger {}	
			}
*/
$(document).ready(function(){
	$(".trigger").click(function(){
	$(".panel").toggle("fast");
	$(this).toggleClass("active");
	return false;
	});
});


/* Карусель (пример для одной адаптивной) 
<div class="list_carousel responsive">
	<ul id="foo1">
		<li></li>
	</ul>
	<a id="prev1" class="prev fa" href="#"></a>
	<a id="next1" class="next fa" href="#"></a>
</div>
*/
$(function() {
    //	Basic carousel, no options
    $('#foo0').carouFredSel();
    //	Responsive layout, resizing the items
    $('#foo1').carouFredSel({
        responsive: true,
        width: '100%',
        scroll: 1,
        auto: false,
        prev: '#prev1',
        next: '#next1',
        items: {
            width: 130,
            visible: {
                min: 3,
                max: 9
            }
        }
    });
});
