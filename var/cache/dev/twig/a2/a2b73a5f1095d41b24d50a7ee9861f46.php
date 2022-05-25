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

/* @OroUser/Sync/outdated_js.html.twig */
class __TwigTemplate_e6342e2cb5906d15ac66b434283fd94b extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroUser/Sync/outdated_js.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroUser/Sync/outdated_js.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroUser/Sync/outdated_js.html.twig"));

        // line 1
        if ($this->extensions['Oro\Bundle\SyncBundle\Twig\OroSyncExtension']->checkWsConnected()) {
            // line 2
            echo "    ";
            $context["roles"] = [];
            // line 3
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 3, $this->source); })()), "user", [], "any", false, false, false, 3), "userRoles", [], "any", false, false, false, 3));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 4
                echo "        ";
                $context["roles"] = twig_array_merge((isset($context["roles"]) || array_key_exists("roles", $context) ? $context["roles"] : (function () { throw new RuntimeError('Variable "roles" does not exist.', 4, $this->source); })()), [0 => twig_get_attribute($this->env, $this->source, $context["role"], "role", [], "any", false, false, false, 4)]);
                // line 5
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 6
            echo "<script>
    loadModules(['orosync/js/sync', 'oroui/js/modal', 'oroui/js/mediator', 'oroui/js/messenger', 'orotranslation/js/translator'],
    function(sync, Modal, mediator, messenger, __) {
        var notifier = null;
        var sendNotification = true;

        mediator.on('page:beforeChange', function() {
            if (notifier) {
                notifier.close();
            }
            sendNotification = false;
        });

        sync.subscribe('oro/outdated_user_page', function (response) {
            var roles = ";
            // line 20
            echo json_encode((isset($context["roles"]) || array_key_exists("roles", $context) ? $context["roles"] : (function () { throw new RuntimeError('Variable "roles" does not exist.', 20, $this->source); })()));
            echo ";

            if (roles.indexOf(response.role) != -1) {
                if (notifier) {
                    notifier.close();
                }

                if (sendNotification) {
                    notifier = messenger.notificationMessage(
                            'warning',
                            __('oro.role.content_outdated')
                    );
                }
            }
        });
    });
</script>
";
        }
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@OroUser/Sync/outdated_js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 20,  65 => 6,  59 => 5,  56 => 4,  51 => 3,  48 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if check_ws() %}
    {% set roles = [] %}
    {% for role in app.user.userRoles %}
        {% set roles = roles|merge([role.role]) %}
    {% endfor %}
<script>
    loadModules(['orosync/js/sync', 'oroui/js/modal', 'oroui/js/mediator', 'oroui/js/messenger', 'orotranslation/js/translator'],
    function(sync, Modal, mediator, messenger, __) {
        var notifier = null;
        var sendNotification = true;

        mediator.on('page:beforeChange', function() {
            if (notifier) {
                notifier.close();
            }
            sendNotification = false;
        });

        sync.subscribe('oro/outdated_user_page', function (response) {
            var roles = {{ roles|json_encode|raw }};

            if (roles.indexOf(response.role) != -1) {
                if (notifier) {
                    notifier.close();
                }

                if (sendNotification) {
                    notifier = messenger.notificationMessage(
                            'warning',
                            __('oro.role.content_outdated')
                    );
                }
            }
        });
    });
</script>
{% endif %}
", "@OroUser/Sync/outdated_js.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/UserBundle/Resources/views/Sync/outdated_js.html.twig");
    }
}
