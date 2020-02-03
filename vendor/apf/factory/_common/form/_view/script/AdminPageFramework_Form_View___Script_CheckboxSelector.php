<?php 
/**
	Admin Page Framework v3.8.20 by Michael Uno 
	Generated by PHP Class Files Script Generator <https://github.com/michaeluno/PHP-Class-Files-Script-Generator>
	<http://en.michaeluno.jp/wp-radar-chart>
	Copyright (c) 2013-2019, Michael Uno; Licensed under MIT <http://opensource.org/licenses/MIT> */
class WP_RadarChartAdminPageFramework_Form_View___Script_CheckboxSelector extends WP_RadarChartAdminPageFramework_Form_View___Script_Base {
    static public function getScript() {
        return <<<JAVASCRIPTS
(function ( $ ) {

    /**
     * Checks all the checkboxes in siblings.
     */        
    $.fn.selectAllWP_RadarChartAdminPageFrameworkCheckboxes = function() {
        jQuery( this ).parent()
            .find( 'input[type=checkbox]' )
            .attr( 'checked', true )
            .trigger( 'change' );   // 3.8.8+
    }
    /**
     * Unchecks all the checkboxes in siblings.
     */
    $.fn.deselectAllWP_RadarChartAdminPageFrameworkCheckboxes = function() {
        jQuery( this ).parent()
            .find( 'input[type=checkbox]' )
            .attr( 'checked', false )
            .trigger( 'change' );   // 3.8.8+
    }          

}( jQuery ));
JAVASCRIPTS;
        
    }
    }
    