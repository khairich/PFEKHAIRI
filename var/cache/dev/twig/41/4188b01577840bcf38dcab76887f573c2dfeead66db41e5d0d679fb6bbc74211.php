<?php

/* groupe/types.html.twig */
class __TwigTemplate_0af130f2131fd6bc06b8f9150e291878496e5fa6c600d04fa95bb35a4102198c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle:Layouts:layout.html.twig", "groupe/types.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle:Layouts:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "groupe/types.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "<link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.0.13/css/all.css\" integrity=\"sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp\" crossorigin=\"anonymous\">

<center>
<table>
<tr>
<td width=\"10%\"><a href=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("groupe_new");
        echo "\"><i class=\"fas fa-database\" style=\"font-size: 80px;\"></i></a></td>
<td width=\"10%\"><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("groupe_new");
        echo "\"><i class=\"fas fa-cloud-upload-alt\" style=\"font-size: 80px;\"></i></a></td>
<td width=\"10%\"><a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("groupe_new");
        echo "\"><i class=\"fas fa-cogs\" style=\"font-size: 80px;\"></i></a></td>
<td width=\"10%\"><a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("groupe_new");
        echo "\"><i class=\"fas fa-bug\" style=\"font-size: 80px;\"></i></a></td>
<td width=\"10%\"><a href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("groupe_new");
        echo "\"><i class=\"fab fa-android\" style=\"font-size: 80px;\"></i></a></td>
<td width=\"10%\"><a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("groupe_new");
        echo "\"><i class=\"fas fa-bug\" style=\"font-size: 80px;\"></i></a></td>
<td width=\"10%\"><a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("groupe_new");
        echo "\"><i class=\"fab fa-apple\" style=\"font-size: 80px;\"></i></a></td>
<td width=\"10%\"><a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("groupe_new");
        echo "\"><i class=\"fas fa-code\" style=\"font-size: 80px;\"></i></a></td>
<td width=\"10%\"><a href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("groupe_new");
        echo "\"><i class=\"fas fa-broadcast-tower\" style=\"font-size: 80px;\"></i></a></td></table>

</center>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "groupe/types.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 16,  75 => 15,  71 => 14,  67 => 13,  63 => 12,  59 => 11,  55 => 10,  51 => 9,  47 => 8,  40 => 3,  34 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"AppBundle:Layouts:layout.html.twig\" %}
{% block content %}
<link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.0.13/css/all.css\" integrity=\"sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp\" crossorigin=\"anonymous\">

<center>
<table>
<tr>
<td width=\"10%\"><a href=\"{{ path('groupe_new') }}\"><i class=\"fas fa-database\" style=\"font-size: 80px;\"></i></a></td>
<td width=\"10%\"><a href=\"{{ path('groupe_new') }}\"><i class=\"fas fa-cloud-upload-alt\" style=\"font-size: 80px;\"></i></a></td>
<td width=\"10%\"><a href=\"{{ path('groupe_new') }}\"><i class=\"fas fa-cogs\" style=\"font-size: 80px;\"></i></a></td>
<td width=\"10%\"><a href=\"{{ path('groupe_new') }}\"><i class=\"fas fa-bug\" style=\"font-size: 80px;\"></i></a></td>
<td width=\"10%\"><a href=\"{{ path('groupe_new') }}\"><i class=\"fab fa-android\" style=\"font-size: 80px;\"></i></a></td>
<td width=\"10%\"><a href=\"{{ path('groupe_new') }}\"><i class=\"fas fa-bug\" style=\"font-size: 80px;\"></i></a></td>
<td width=\"10%\"><a href=\"{{ path('groupe_new') }}\"><i class=\"fab fa-apple\" style=\"font-size: 80px;\"></i></a></td>
<td width=\"10%\"><a href=\"{{ path('groupe_new') }}\"><i class=\"fas fa-code\" style=\"font-size: 80px;\"></i></a></td>
<td width=\"10%\"><a href=\"{{ path('groupe_new') }}\"><i class=\"fas fa-broadcast-tower\" style=\"font-size: 80px;\"></i></a></td></table>

</center>
{% endblock %}", "groupe/types.html.twig", "C:\\wamp\\www\\khairi_pfe\\app\\Resources\\views\\groupe\\types.html.twig");
    }
}
