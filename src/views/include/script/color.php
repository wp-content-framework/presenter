<?php
/**
 * WP_Framework_Presenter Views Include Script Modal
 *
 * @version 0.0.1
 * @author technote-space
 * @copyright technote-space All Rights Reserved
 * @license https://opensource.org/licenses/mit-license.html MIT License
 * @link https://technote.space
 */

if ( ! defined( 'WP_CONTENT_FRAMEWORK' ) ) {
	return;
}
/** @var \WP_Framework_Presenter\Interfaces\Presenter $instance */
?>

<script>
    (function ($) {
        $(".<?php $instance->h( $instance->get_color_picker_class() );?>").each(function () {
            const $this = $(this);
            $this.wpColorPicker({
                defaultColor: false,
                change: function (event, ui) {
                    $this.val(ui.color.toString()).trigger('change');
                },
                clear: function () {
                    $this.trigger('<?php $instance->h( $instance->app->slug_name . '-' );?>cleared');
                },
                hide: true,
                palettes: true
            });
        });
    })(jQuery);
</script>
