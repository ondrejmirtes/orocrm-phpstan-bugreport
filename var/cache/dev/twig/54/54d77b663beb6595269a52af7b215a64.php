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

/* @OroEmail/js_modules_config.html.twig */
class __TwigTemplate_7d56c992455b39fd9df864b3b17e282f extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroEmail/js_modules_config.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroEmail/js_modules_config.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroEmail/js_modules_config.html.twig"));

        // line 1
        $macros["Asset"] = $this->macros["Asset"] = $this->loadTemplate("@OroAsset/Asset.html.twig", "@OroEmail/js_modules_config.html.twig", 1)->unwrap();
        // line 2
        echo twig_call_macro($macros["Asset"], "macro_js_modules_config", [["oroemail/js/app/components/new-email-message-component" => ["wsChannel" => $this->extensions['Oro\Bundle\EmailBundle\Twig\EmailExtension']->getEmailWSChannel()], "oroemail/js/app/components/sidebar-recent-emails-component" => ["wsChannel" => $this->extensions['Oro\Bundle\EmailBundle\Twig\EmailExtension']->getEmailWSChannel()], "oroemail/js/app/unread-emails-state-holder" => ["wsChannel" => $this->extensions['Oro\Bundle\EmailBundle\Twig\EmailExtension']->getEmailWSChannel()], "oroemail/js/util/unread-email-count-cache" => ["unreadEmailsCount" => $this->extensions['Oro\Bundle\EmailBundle\Twig\EmailExtension']->getUnreadEmailsCount()]]], 2, $context, $this->getSourceContext());
        // line 15
        echo "
";
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@OroEmail/js_modules_config.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 15,  48 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import '@OroAsset/Asset.html.twig' as Asset %}
{{ Asset.js_modules_config({
    'oroemail/js/app/components/new-email-message-component': {
        wsChannel: oro_get_email_ws_event()
    },
    'oroemail/js/app/components/sidebar-recent-emails-component': {
        wsChannel: oro_get_email_ws_event()
    },
    'oroemail/js/app/unread-emails-state-holder': {
        wsChannel: oro_get_email_ws_event()
    },
    'oroemail/js/util/unread-email-count-cache': {
        unreadEmailsCount: oro_get_unread_emails_count()
    }
}) }}
", "@OroEmail/js_modules_config.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/EmailBundle/Resources/views/js_modules_config.html.twig");
    }
}
