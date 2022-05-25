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

/* @OroImap/credentialsTopicSubscribe.html.twig */
class __TwigTemplate_0a44780fd943700eebcfd125452f22fb extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroImap/credentialsTopicSubscribe.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroImap/credentialsTopicSubscribe.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroImap/credentialsTopicSubscribe.html.twig"));

        // line 1
        if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1, $this->source); })()), "user", [], "any", false, false, false, 1) && $this->extensions['Oro\Bundle\SyncBundle\Twig\OroSyncExtension']->checkWsConnected())) {
            // line 2
            echo "<script>
    loadModules(['orosync/js/sync', 'oroui/js/messenger', 'orotranslation/js/translator'],
        function (sync, messenger, __) {
            sync.subscribe('oro/imap_sync_fail/";
            // line 5
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 5, $this->source); })()), "user", [], "any", false, false, false, 5), "id", [], "any", false, false, false, 5), "html", null, true);
            echo "', function (response) {
                messenger.notificationMessage(
                    'error',
                    __('oro.imap.sync.flash_message.user_box_failed', {username: response.username, host: response.host})
                );
            });
            ";
            // line 11
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("oro_imap_sync_origin_credential_notifications")) {
                // line 12
                echo "            sync.subscribe('oro/imap_sync_fail/*', function (response) {
                messenger.notificationMessage(
                    'error',
                    __('oro.imap.sync.flash_message.system_box_failed', {username: response.username, host: response.host})
                );
            });
            ";
            }
            // line 19
            echo "        });
</script>
";
        }
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@OroImap/credentialsTopicSubscribe.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 19,  64 => 12,  62 => 11,  53 => 5,  48 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if app.user and check_ws() %}
<script>
    loadModules(['orosync/js/sync', 'oroui/js/messenger', 'orotranslation/js/translator'],
        function (sync, messenger, __) {
            sync.subscribe('oro/imap_sync_fail/{{ app.user.id }}', function (response) {
                messenger.notificationMessage(
                    'error',
                    __('oro.imap.sync.flash_message.user_box_failed', {username: response.username, host: response.host})
                );
            });
            {% if is_granted('oro_imap_sync_origin_credential_notifications') %}
            sync.subscribe('oro/imap_sync_fail/*', function (response) {
                messenger.notificationMessage(
                    'error',
                    __('oro.imap.sync.flash_message.system_box_failed', {username: response.username, host: response.host})
                );
            });
            {% endif %}
        });
</script>
{% endif %}
", "@OroImap/credentialsTopicSubscribe.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/ImapBundle/Resources/views/credentialsTopicSubscribe.html.twig");
    }
}
