 <div id="modalMarkup" class="text-left modal-demo g-max-width-600 g-height-95x g-bg-white g-color-black g-pa-20" style="display: none;"></div>

    <!-- JS Global Compulsory -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/jquery-migrate/jquery-migrate.min.js"></script>
    <script src="assets/vendor/tether.min.js"></script>
    <script src="assets/vendor/bootstrap/bootstrap.min.js"></script>
    <script src="assets/vendor/bootstrap/offcanvas.js"></script>

    <!-- jQuery UI Core -->
    <script src="assets/vendor/jquery-ui/ui/widget.js"></script>
    <script src="assets/vendor/jquery-ui/ui/version.js"></script>
    <script src="assets/vendor/jquery-ui/ui/keycode.js"></script>
    <script src="assets/vendor/jquery-ui/ui/position.js"></script>
    <script src="assets/vendor/jquery-ui/ui/unique-id.js"></script>
    <script src="assets/vendor/jquery-ui/ui/safe-active-element.js"></script>
    <!-- End jQuery UI Core -->

    <!-- jQuery UI Helpers -->
    <script src="assets/vendor/jquery-ui/ui/widgets/menu.js"></script>
    <script src="assets/vendor/jquery-ui/ui/widgets/mouse.js"></script>
    <!-- End jQuery UI Helpers -->

    <!-- jQuery UI Widgets -->
    <script src="assets/vendor/jquery-ui/ui/widgets/autocomplete.js"></script>
    <script src="assets/vendor/jquery-ui/ui/widgets/datepicker.js"></script>
    <script src="assets/vendor/jquery-ui/ui/widgets/slider.js"></script>
    <!-- End jQuery UI Widgets -->

    <!-- JS Implementing Plugins -->
    <script src="assets/vendor/hs-megamenu/src/hs.megamenu.js"></script>
    <script src="assets/vendor/jquery.maskedinput/src/jquery.maskedinput.js"></script>
    <script src="assets/vendor/dzsparallaxer/dzsparallaxer.js"></script>
    <script src="assets/vendor/dzsparallaxer/dzsscroller/scroller.js"></script>
    <script src="assets/vendor/dzsparallaxer/advancedscroller/plugin.js"></script>
    <script src="assets/vendor/jquery.filer/js/jquery.filer.min.js"></script>

    <!-- JS Unify -->
    <script src="assets/js/hs.core.js"></script>
    <script src="assets/js/components/hs.header.js"></script>
    <script src="assets/js/helpers/hs.hamburgers.js"></script>
    <script src="assets/js/helpers/hs.rating.js"></script>
    <script src="assets/js/helpers/hs.not-empty-state.js"></script>
    <script src="assets/js/helpers/hs.focus-state.js"></script>
    <script src="assets/js/components/hs.file-attachement.js"></script>
    <script src="assets/js/components/hs.datepicker.js"></script>
    <script src="assets/js/components/hs.slider.js"></script>
    <script src="assets/js/components/hs.masked-input.js"></script>
    <script src="assets/js/components/hs.count-qty.js"></script>
    <script src="assets/js/helpers/hs.shortcode-filter.js"></script>
    <script src="assets/js/components/hs.autocomplete.js"></script>
    <script src="assets/js/components/hs.autocomplete-local-search.js"></script>
    <script src="assets/js/components/hs.go-to.js"></script>

    <!-- Show / Copy Code -->
    <script src="assets/vendor/prism/prism.js"></script>
    <script src="assets/vendor/prism/components/prism-markup.min.js"></script>
    <script src="assets/vendor/prism/components/prism-css.min.js"></script>
    <script src="assets/vendor/prism/components/prism-clike.min.js"></script>
    <script src="assets/vendor/prism/components/prism-javascript.min.js"></script>
    <script src="assets/vendor/prism/plugins/toolbar/prism-toolbar.min.js"></script>
    <script src="assets/vendor/prism/plugins/copy-to-clipboard/prism-copy-to-clipboard.min.js"></script>

    <script src="assets/vendor/malihu-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="assets/vendor/custombox/custombox.min.js"></script>
    <script src="assets/vendor/clipboard/dist/clipboard.min.js"></script>

    <script src="assets/js/components/hs.scrollbar.js"></script>
    <script src="assets/js/helpers/hs.modal-markup.js"></script>
    <script src="assets/js/components/hs.markup-copy.js"></script>
    <script src="assets/js/components/hs.tabs.js"></script>
    <script src="assets/js/components/hs.modal-window.js"></script>

    <script>
      $(document).on('ready', function () {
        $.HSCore.helpers.HSModalMarkup.init('.js-modal-markup');

        $.HSCore.components.HSMarkupCopy.init('.js-copy');
      });
    </script>

    <!-- JS Custom -->
    <script src="../../../assets/js/custom.js"></script>

    <!-- JS Plugins Init. -->
    <script>
      $(document).on('ready', function () {
        // initialization of go to
        $.HSCore.components.HSGoTo.init('.js-go-to');

        // initialization of forms
        $.HSCore.components.HSFileAttachment.init('.js-file-attachment');
        $.HSCore.helpers.HSRating.init();
        $.HSCore.helpers.HSFocusState.init();
        $.HSCore.helpers.HSNotEmptyState.init();
        $.HSCore.components.HSDatepicker.init('#datepickerDefault, #datepickerInline, #datepickerInlineFrom, #datepickerFrom');
        $.HSCore.components.HSSlider.init('#regularSlider, #regularSlider2, #regularSlider3, #rangeSlider, #rangeSlider2, #rangeSlider3, #stepSlider, #stepSlider2, #stepSlider3');
        $.HSCore.components.HSMaskedInput.init('[data-mask]');
        $.HSCore.components.HSCountQty.init('.js-quantity');
      });

      $(window).on('load', function () {
        // initialization of autocomplet
        $.HSCore.components.HSLocalSearchAutocomplete.init('#autocomplete1');

        // initialization of autocomplet
        $.HSCore.components.HSAutocomplete.init('#autocomplete2');

        // initialization of header
        $.HSCore.components.HSHeader.init($('#js-header'));
        $.HSCore.helpers.HSHamburgers.init('.hamburger');

        // initialization of HSMegaMenu component
        $('.js-mega-menu').HSMegaMenu({
          event: 'hover',
          pageContainer: $('.container'),
          breakpoint: 991
        });
      });
    </script>
  </body>
</html>
