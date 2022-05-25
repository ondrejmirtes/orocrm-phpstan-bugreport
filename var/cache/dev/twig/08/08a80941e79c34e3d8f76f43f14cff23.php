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

/* @OroTracking/TrackingWebsite/script.js.twig */
class __TwigTemplate_be0e58aac9880edb3b877da45b2e067c extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroTracking/TrackingWebsite/script.js.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroTracking/TrackingWebsite/script.js.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroTracking/TrackingWebsite/script.js.twig"));

        // line 1
        $context["hostWithPath"] = $this->extensions['Oro\Bundle\UIBundle\Twig\UiExtension']->pregReplace($this->extensions['Oro\Bundle\ConfigBundle\Twig\ConfigExtension']->getConfigValue("oro_ui.application_url"), "/^https?:\\/\\/?/", "");
        // line 2
        echo "<script type=\"text/javascript\">
    var _paq = _paq || [];
    _paq.push(['setUserId', [user_identifier] ]);
    _paq.push(['setConversionAttributionFirstReferrer', false]);
    _paq.push(['trackPageView']);
    // Uncomment following line to track custom events
    // _paq.push(['trackEvent', 'OroCRM', 'Tracking', [name], [value] ]);
    (function() {
        var u=((\"https:\" == document.location.protocol) ? \"https\" : \"http\") + \"://\" + ";
        // line 10
        echo (((isset($context["hostWithPath"]) || array_key_exists("hostWithPath", $context) ? $context["hostWithPath"] : (function () { throw new RuntimeError('Variable "hostWithPath" does not exist.', 10, $this->source); })())) ? (json_encode((isset($context["hostWithPath"]) || array_key_exists("hostWithPath", $context) ? $context["hostWithPath"] : (function () { throw new RuntimeError('Variable "hostWithPath" does not exist.', 10, $this->source); })()))) : ("[host]"));
        echo " + \"/\";
        _paq.push(['setTrackerUrl', u+'tracking.php']);
        _paq.push(['setSiteId', '";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 12, $this->source); })()), "identifier", [], "any", false, false, false, 12), "js", null, true);
        echo "']);
        var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0]; g.type='text/javascript';
        g.defer=true; g.async=true; g.src=u+'bundles/orotracking/js/piwik.min.js'; s.parentNode.insertBefore(g,s);
    })();
</script>
";
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@OroTracking/TrackingWebsite/script.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 12,  58 => 10,  48 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set hostWithPath = oro_config_value('oro_ui.application_url')|oro_preg_replace('/^https?:\\\\/\\\\/?/', '') %}
<script type=\"text/javascript\">
    var _paq = _paq || [];
    _paq.push(['setUserId', [user_identifier] ]);
    _paq.push(['setConversionAttributionFirstReferrer', false]);
    _paq.push(['trackPageView']);
    // Uncomment following line to track custom events
    // _paq.push(['trackEvent', 'OroCRM', 'Tracking', [name], [value] ]);
    (function() {
        var u=((\"https:\" == document.location.protocol) ? \"https\" : \"http\") + \"://\" + {{ hostWithPath ? hostWithPath|json_encode|raw : \"[host]\" }} + \"/\";
        _paq.push(['setTrackerUrl', u+'tracking.php']);
        _paq.push(['setSiteId', '{{ entity.identifier }}']);
        var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0]; g.type='text/javascript';
        g.defer=true; g.async=true; g.src=u+'bundles/orotracking/js/piwik.min.js'; s.parentNode.insertBefore(g,s);
    })();
</script>
", "@OroTracking/TrackingWebsite/script.js.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/marketing/src/Oro/Bundle/TrackingBundle/Resources/views/TrackingWebsite/script.js.twig");
    }
}
