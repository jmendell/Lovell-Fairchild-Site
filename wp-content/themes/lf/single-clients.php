<?php 

	get_template_part('templates/content-single-client', get_post_type()); 

	get_template_part('templates/section-gallery-modal');

	?>
	<script type="text/javascript">
	jQuery(document).ready(function($){
		function buildGallery() {
			var imgList= [];
			$('.gallery dl').each(function(){
				var imgSrc = $(this).find('a').attr('href');
				imgList.push(imgSrc);
			});

			var $modal = $('.gallery--modal');

			_ShowModal = function () {
				$modal.fadeIn();

				$('.next').click(function() {
				  index = nextIndex(index, imgList.length);
				  $('.gallery--modal .modal-inner img').attr('src', imgList[index]);
				});

				$('.prev').click(function() {
				  index = previousIndex(index, imgList.length);
				  $('.gallery--modal .modal-inner img').attr('src', imgList[index]);
				});
			},

			_CloseModal = function () {
				$modal.fadeOut();
				$('.gallery-modal .modal-inner').html('');
			}

			$('.gallery-item').on('click', function(e){
				e.preventDefault();
				index = $(this).index();
				$('.gallery--modal .modal-inner').html('<img src='+imgList[index]+'>');
				_ShowModal();
			});

			$('.overlay').click(function(){
				_CloseModal();
			});
			$('.escape').click(function(){
				_CloseModal();
			});

			var previousIndex = function(index, length) {
			  if (index <= 0) {
			    return length - 1; // cycle backwards to the last image
			  } else {
			    return index - 1;
			  }
			}

			var nextIndex = function(index, length) {
			  return ((index + 1) % length)
			};
		}

		buildGallery();

	});
	
	</script>

