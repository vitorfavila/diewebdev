<script type="text/javascript">
	$('.menu .item').removeClass('active');
	@if (!empty($menu))
		var menu = '{{ $menu }}';
		$('.menu .item.menu-'+menu).addClass('active');
	@endif
</script>
