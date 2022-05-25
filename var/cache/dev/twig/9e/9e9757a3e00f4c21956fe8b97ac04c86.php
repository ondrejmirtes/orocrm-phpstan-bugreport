<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @OroLocale/js_modules_config.html.twig */
class __TwigTemplate_6e08c2b725ddba99955cbff019b196ae extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroLocale/js_modules_config.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroLocale/js_modules_config.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroLocale/js_modules_config.html.twig"));

        // line 1
        $context["dateTimeFormats"] = [];
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->extensions['Oro\Bundle\LocaleBundle\Twig\DateFormatExtension']->getDateTimeFormatterList());
        foreach ($context['_seq'] as $context["_key"] => $context["formatterName"]) {
            // line 3
            echo "    ";
            $context["dateTimeFormats"] = twig_array_merge((isset($context["dateTimeFormats"]) || array_key_exists("dateTimeFormats", $context) ? $context["dateTimeFormats"] : (function () { throw new RuntimeError('Variable "dateTimeFormats" does not exist.', 3, $this->source); })()), [            // line 4
$context["formatterName"] => ["day" => $this->extensions['Oro\Bundle\LocaleBundle\Twig\DateFormatExtension']->getDayFormat(            // line 5
$context["formatterName"]), "date" => $this->extensions['Oro\Bundle\LocaleBundle\Twig\DateFormatExtension']->getDateFormat(            // line 6
$context["formatterName"]), "time" => $this->extensions['Oro\Bundle\LocaleBundle\Twig\DateFormatExtension']->getTimeFormat(            // line 7
$context["formatterName"]), "datetime" => $this->extensions['Oro\Bundle\LocaleBundle\Twig\DateFormatExtension']->getDateTimeFormat(            // line 8
$context["formatterName"])]]);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['formatterName'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "
";
        // line 13
        $context["numberFormatSettings"] = [];
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable([0 => "decimal", 1 => "percent", 2 => "currency"]);
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 15
            echo "    ";
            $context["locale"] = ((($context["style"] == "currency")) ? ((($this->extensions['Oro\Bundle\LocaleBundle\Twig\LocaleExtension']->getLocale() . "@currency=") . $this->extensions['Oro\Bundle\LocaleBundle\Twig\LocaleExtension']->getCurrency())) : ($this->extensions['Oro\Bundle\LocaleBundle\Twig\LocaleExtension']->getLocale()));
            // line 16
            echo "    ";
            $context["numberFormatSettings"] = twig_array_merge((isset($context["numberFormatSettings"]) || array_key_exists("numberFormatSettings", $context) ? $context["numberFormatSettings"] : (function () { throw new RuntimeError('Variable "numberFormatSettings" does not exist.', 16, $this->source); })()), [            // line 17
$context["style"] => ["grouping_size" => $this->extensions['Oro\Bundle\LocaleBundle\Twig\NumberExtension']->getAttribute("grouping_size",             // line 18
$context["style"]), "grouping_used" => $this->extensions['Oro\Bundle\LocaleBundle\Twig\NumberExtension']->getAttribute("grouping_used",             // line 19
$context["style"]), "min_fraction_digits" => $this->extensions['Oro\Bundle\LocaleBundle\Twig\NumberExtension']->getAttribute("min_fraction_digits",             // line 20
$context["style"], (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 20, $this->source); })())), "max_fraction_digits" => $this->extensions['Oro\Bundle\LocaleBundle\Twig\NumberExtension']->getAttribute("max_fraction_digits",             // line 21
$context["style"], (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 21, $this->source); })())), "negative_prefix" => $this->extensions['Oro\Bundle\LocaleBundle\Twig\NumberExtension']->getTextAttribute("negative_prefix",             // line 23
$context["style"]), "negative_suffix" => $this->extensions['Oro\Bundle\LocaleBundle\Twig\NumberExtension']->getTextAttribute("negative_suffix",             // line 24
$context["style"]), "positive_prefix" => $this->extensions['Oro\Bundle\LocaleBundle\Twig\NumberExtension']->getTextAttribute("positive_prefix",             // line 25
$context["style"]), "positive_suffix" => $this->extensions['Oro\Bundle\LocaleBundle\Twig\NumberExtension']->getTextAttribute("positive_suffix",             // line 26
$context["style"]), "currency_code" => $this->extensions['Oro\Bundle\LocaleBundle\Twig\NumberExtension']->getTextAttribute("currency_code",             // line 27
$context["style"]), "padding_character" => $this->extensions['Oro\Bundle\LocaleBundle\Twig\NumberExtension']->getTextAttribute("padding_character",             // line 28
$context["style"]), "decimal_separator_symbol" => $this->extensions['Oro\Bundle\LocaleBundle\Twig\NumberExtension']->getSymbol("decimal_separator_symbol",             // line 30
$context["style"]), "grouping_separator_symbol" => $this->extensions['Oro\Bundle\LocaleBundle\Twig\NumberExtension']->getSymbol("grouping_separator_symbol",             // line 31
$context["style"]), "monetary_separator_symbol" => $this->extensions['Oro\Bundle\LocaleBundle\Twig\NumberExtension']->getSymbol("monetary_separator_symbol",             // line 32
$context["style"]), "monetary_grouping_separator_symbol" => $this->extensions['Oro\Bundle\LocaleBundle\Twig\NumberExtension']->getSymbol("monetary_grouping_separator_symbol",             // line 33
$context["style"]), "currency_symbol" => $this->extensions['Oro\Bundle\LocaleBundle\Twig\NumberExtension']->getSymbol("currency_symbol",             // line 34
$context["style"]), "zero_digit_symbol" => $this->extensions['Oro\Bundle\LocaleBundle\Twig\NumberExtension']->getSymbol("zero_digit_symbol",             // line 35
$context["style"])]]);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "
";
        // line 40
        $context["localeConfigurationClass"] = "\\Oro\\Bundle\\LocaleBundle\\DependencyInjection\\Configuration::";
        // line 41
        $context["currencyConfigurationClass"] = "\\Oro\\Bundle\\CurrencyBundle\\DependencyInjection\\Configuration::";
        // line 42
        $context["defaults"] = ["locale" => twig_constant((        // line 43
(isset($context["localeConfigurationClass"]) || array_key_exists("localeConfigurationClass", $context) ? $context["localeConfigurationClass"] : (function () { throw new RuntimeError('Variable "localeConfigurationClass" does not exist.', 43, $this->source); })()) . "DEFAULT_LOCALE")), "language" => twig_constant((        // line 44
(isset($context["localeConfigurationClass"]) || array_key_exists("localeConfigurationClass", $context) ? $context["localeConfigurationClass"] : (function () { throw new RuntimeError('Variable "localeConfigurationClass" does not exist.', 44, $this->source); })()) . "DEFAULT_LANGUAGE")), "rtl_mode" => false, "country" => twig_constant((        // line 46
(isset($context["localeConfigurationClass"]) || array_key_exists("localeConfigurationClass", $context) ? $context["localeConfigurationClass"] : (function () { throw new RuntimeError('Variable "localeConfigurationClass" does not exist.', 46, $this->source); })()) . "DEFAULT_COUNTRY")), "currency" => twig_constant((        // line 47
(isset($context["currencyConfigurationClass"]) || array_key_exists("currencyConfigurationClass", $context) ? $context["currencyConfigurationClass"] : (function () { throw new RuntimeError('Variable "currencyConfigurationClass" does not exist.', 47, $this->source); })()) . "DEFAULT_CURRENCY"))];
        // line 49
        echo "
";
        // line 51
        $context["mnemonicWeekDayNames"] = ["1" => "sunday", "2" => "monday", "3" => "tuesday", "4" => "wednesday", "5" => "thursday", "6" => "friday", "7" => "saturday"];
        // line 60
        echo "
";
        // line 61
        $context["settings"] = ["locale" => $this->extensions['Oro\Bundle\LocaleBundle\Twig\LocaleExtension']->getLocale(), "language" => $this->extensions['Oro\Bundle\LocaleBundle\Twig\LocaleExtension']->getLanguage(), "rtl_mode" => $this->extensions['Oro\Bundle\LocaleBundle\Twig\LocaleExtension']->isRtlMode(), "country" => $this->extensions['Oro\Bundle\LocaleBundle\Twig\LocaleExtension']->getCountry(), "currency" => $this->extensions['Oro\Bundle\LocaleBundle\Twig\LocaleExtension']->getCurrency(), "currencyViewType" => $this->extensions['Oro\Bundle\CurrencyBundle\Twig\CurrencyExtension']->getViewType(), "currencySymbolPrepend" => $this->extensions['Oro\Bundle\LocaleBundle\Twig\NumberExtension']->isCurrencySymbolPrepend(), "currency_data" => $this->extensions['Oro\Bundle\CurrencyBundle\Twig\CurrencyExtension']->getSymbolCollection(), "timezone" => $this->extensions['Oro\Bundle\LocaleBundle\Twig\LocaleExtension']->getTimeZone(), "timezone_offset" => $this->extensions['Oro\Bundle\LocaleBundle\Twig\LocaleExtension']->getTimeZoneOffset(), "format_address_by_address_country" => $this->extensions['Oro\Bundle\LocaleBundle\Twig\LocaleExtension']->isFormatAddressByAddressCountry(), "apiKey" => $this->extensions['Oro\Bundle\ConfigBundle\Twig\ConfigExtension']->getConfigValue("oro_google_integration.google_api_key"), "unit" => ["temperature" => $this->extensions['Oro\Bundle\ConfigBundle\Twig\ConfigExtension']->getConfigValue("oro_locale.temperature_unit"), "wind_speed" => $this->extensions['Oro\Bundle\ConfigBundle\Twig\ConfigExtension']->getConfigValue("oro_locale.wind_speed_unit")], "format" => ["datetime" =>         // line 79
(isset($context["dateTimeFormats"]) || array_key_exists("dateTimeFormats", $context) ? $context["dateTimeFormats"] : (function () { throw new RuntimeError('Variable "dateTimeFormats" does not exist.', 79, $this->source); })()), "number" =>         // line 80
(isset($context["numberFormatSettings"]) || array_key_exists("numberFormatSettings", $context) ? $context["numberFormatSettings"] : (function () { throw new RuntimeError('Variable "numberFormatSettings" does not exist.', 80, $this->source); })())], "calendar" => ["dow" => ["wide" => $this->extensions['Oro\Bundle\LocaleBundle\Twig\CalendarExtension']->getDayOfWeekNames("wide"), "abbreviated" => $this->extensions['Oro\Bundle\LocaleBundle\Twig\CalendarExtension']->getDayOfWeekNames("abbreviated"), "short" => $this->extensions['Oro\Bundle\LocaleBundle\Twig\CalendarExtension']->getDayOfWeekNames("short"), "narrow" => $this->extensions['Oro\Bundle\LocaleBundle\Twig\CalendarExtension']->getDayOfWeekNames("narrow"), "mnemonic" =>         // line 88
(isset($context["mnemonicWeekDayNames"]) || array_key_exists("mnemonicWeekDayNames", $context) ? $context["mnemonicWeekDayNames"] : (function () { throw new RuntimeError('Variable "mnemonicWeekDayNames" does not exist.', 88, $this->source); })())], "months" => ["wide" => $this->extensions['Oro\Bundle\LocaleBundle\Twig\CalendarExtension']->getMonthNames("wide"), "abbreviated" => $this->extensions['Oro\Bundle\LocaleBundle\Twig\CalendarExtension']->getMonthNames("abbreviated"), "narrow" => $this->extensions['Oro\Bundle\LocaleBundle\Twig\CalendarExtension']->getMonthNames("narrow")], "first_dow" => $this->extensions['Oro\Bundle\LocaleBundle\Twig\CalendarExtension']->getFirstDayOfWeek()]];
        // line 98
        $macros["Asset"] = $this->macros["Asset"] = $this->loadTemplate("@OroAsset/Asset.html.twig", "@OroLocale/js_modules_config.html.twig", 98)->unwrap();
        // line 99
        echo twig_call_macro($macros["Asset"], "macro_js_modules_config", [["orolocale/js/locale-settings" => ["defaults" =>         // line 101
(isset($context["defaults"]) || array_key_exists("defaults", $context) ? $context["defaults"] : (function () { throw new RuntimeError('Variable "defaults" does not exist.', 101, $this->source); })()), "settings" =>         // line 102
(isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new RuntimeError('Variable "settings" does not exist.', 102, $this->source); })())]]], 99, $context, $this->getSourceContext());
        // line 104
        echo "
";
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@OroLocale/js_modules_config.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 104,  130 => 102,  129 => 101,  128 => 99,  126 => 98,  124 => 88,  123 => 80,  122 => 79,  121 => 61,  118 => 60,  116 => 51,  113 => 49,  111 => 47,  110 => 46,  109 => 44,  108 => 43,  107 => 42,  105 => 41,  103 => 40,  100 => 39,  94 => 35,  93 => 34,  92 => 33,  91 => 32,  90 => 31,  89 => 30,  88 => 28,  87 => 27,  86 => 26,  85 => 25,  84 => 24,  83 => 23,  82 => 21,  81 => 20,  80 => 19,  79 => 18,  78 => 17,  76 => 16,  73 => 15,  69 => 14,  67 => 13,  64 => 12,  58 => 8,  57 => 7,  56 => 6,  55 => 5,  54 => 4,  52 => 3,  48 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set dateTimeFormats = {} %}
{% for formatterName in oro_datetime_formatter_list() %}
    {% set dateTimeFormats = dateTimeFormats|merge({
        (formatterName) : {
            'day': oro_day_format(formatterName),
            'date': oro_date_format(formatterName),
            'time': oro_time_format(formatterName),
            'datetime': oro_datetime_format(formatterName),
        }
    }) %}
{% endfor %}

{% set numberFormatSettings = {} %}
{% for style in ['decimal', 'percent', 'currency'] %}
    {% set locale = style == 'currency' ? oro_locale() ~ '@currency=' ~ oro_currency() : oro_locale() %}
    {% set numberFormatSettings = numberFormatSettings|merge({
        (style): {
            'grouping_size':       oro_locale_number_attribute('grouping_size', style),
            'grouping_used':       oro_locale_number_attribute('grouping_used', style),
            'min_fraction_digits': oro_locale_number_attribute('min_fraction_digits', style, locale),
            'max_fraction_digits': oro_locale_number_attribute('max_fraction_digits', style, locale),

            'negative_prefix':   oro_locale_number_text_attribute('negative_prefix', style),
            'negative_suffix':   oro_locale_number_text_attribute('negative_suffix', style),
            'positive_prefix':   oro_locale_number_text_attribute('positive_prefix', style),
            'positive_suffix':   oro_locale_number_text_attribute('positive_suffix', style),
            'currency_code':     oro_locale_number_text_attribute('currency_code', style),
            'padding_character': oro_locale_number_text_attribute('padding_character', style),

            'decimal_separator_symbol':           oro_locale_number_symbol('decimal_separator_symbol', style),
            'grouping_separator_symbol':          oro_locale_number_symbol('grouping_separator_symbol', style),
            'monetary_separator_symbol':          oro_locale_number_symbol('monetary_separator_symbol', style),
            'monetary_grouping_separator_symbol': oro_locale_number_symbol('monetary_grouping_separator_symbol', style),
            'currency_symbol':                    oro_locale_number_symbol('currency_symbol', style),
            'zero_digit_symbol':                  oro_locale_number_symbol('zero_digit_symbol', style),
        }
    }) %}
{% endfor %}

{% set localeConfigurationClass = '\\\\Oro\\\\Bundle\\\\LocaleBundle\\\\DependencyInjection\\\\Configuration::' %}
{% set currencyConfigurationClass = '\\\\Oro\\\\Bundle\\\\CurrencyBundle\\\\DependencyInjection\\\\Configuration::' %}
{% set defaults = {
    'locale':   constant(localeConfigurationClass ~ 'DEFAULT_LOCALE'),
    'language': constant(localeConfigurationClass ~ 'DEFAULT_LANGUAGE'),
    'rtl_mode': false,
    'country':  constant(localeConfigurationClass ~ 'DEFAULT_COUNTRY'),
    'currency': constant(currencyConfigurationClass ~ 'DEFAULT_CURRENCY')
} %}

{# Mnemonic day names used in system to determination a week day independently of translations and number indexes #}
{% set mnemonicWeekDayNames = {
    '1': 'sunday',
    '2': 'monday',
    '3': 'tuesday',
    '4': 'wednesday',
    '5': 'thursday',
    '6': 'friday',
    '7': 'saturday'
} %}

{% set settings = {
    'locale':   oro_locale(),
    'language': oro_language(),
    'rtl_mode': oro_is_rtl_mode(),
    'country':  oro_country(),
    'currency': oro_currency(),
    'currencyViewType': oro_currency_view_type(),
    'currencySymbolPrepend': oro_currency_symbol_prepend(),
    'currency_data': oro_currency_symbol_collection(),
    'timezone': oro_timezone(),
    'timezone_offset': oro_timezone_offset(),
    'format_address_by_address_country': oro_format_address_by_address_country(),
    'apiKey': oro_config_value('oro_google_integration.google_api_key'),
    'unit': {
        'temperature': oro_config_value('oro_locale.temperature_unit'),
        'wind_speed':  oro_config_value('oro_locale.wind_speed_unit')
    },
    'format': {
        'datetime': dateTimeFormats,
        'number': numberFormatSettings
    },
    'calendar': {
        'dow': {
            'wide':        oro_calendar_day_of_week_names('wide'),
            'abbreviated': oro_calendar_day_of_week_names('abbreviated'),
            'short':       oro_calendar_day_of_week_names('short'),
            'narrow':      oro_calendar_day_of_week_names('narrow'),
            'mnemonic':    mnemonicWeekDayNames
        },
        'months': {
            'wide':        oro_calendar_month_names('wide'),
            'abbreviated': oro_calendar_month_names('abbreviated'),
            'narrow':      oro_calendar_month_names('narrow'),
        },
        'first_dow': oro_calendar_first_day_of_week()
    }
} %}
{% import '@OroAsset/Asset.html.twig' as Asset %}
{{ Asset.js_modules_config({
    'orolocale/js/locale-settings': {
        defaults: defaults,
        settings: settings
    }
}) }}
", "@OroLocale/js_modules_config.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/LocaleBundle/Resources/views/js_modules_config.html.twig");
    }
}
