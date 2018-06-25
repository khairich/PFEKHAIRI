<?php

/* entreprise/index.html.twig */
class __TwigTemplate_6b00cffba7270d4fd85f52a234ea143c57f641cffd395d406ee1d5c5c4a2ed0f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle:Layouts:layout.html.twig", "entreprise/index.html.twig", 1);
        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "entreprise/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 4
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/custom/home.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 9
        echo "    <div class=\"container\">
     <div style=\"width:1100px; background:white;\">
            <h1 class=\"box-header\">Enterprise Offers</h1>
            <div class=\"box-content\">           
            <div class=\"publication-item-content\" style=\"margin: 25px;\">

        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entreprises"]) ? $context["entreprises"] : $this->getContext($context, "entreprises")));
        foreach ($context['_seq'] as $context["_key"] => $context["entreprise"]) {
            // line 16
            echo "          <b> EnterPrise : </b> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entreprise"], "idEntreprise", array()), "html", null, true);
            echo " </br>
          <b> Background : </b>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["entreprise"], "background", array()), "html", null, true);
            echo " </br>
          <b> EarliestStartDate : </b> ";
            // line 18
            if ($this->getAttribute($context["entreprise"], "earliestStartDate", array())) {
                echo " ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entreprise"], "earliestStartDate", array()), "Y-m-d"), "html", null, true);
            }
            echo " --
          <b> LatestEndDate     : </b>";
            // line 19
            if ($this->getAttribute($context["entreprise"], "latestEndDate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entreprise"], "latestEndDate", array()), "Y-m-d"), "html", null, true);
            }
            echo " </br>
          <b> Salary     :  </b> ";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["entreprise"], "salary", array()), "html", null, true);
            echo "</br>
          <b> Positions  : </b>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["entreprise"], "positions", array()), "html", null, true);
            echo "</br>
          <b> Skills     :</b> ";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["entreprise"], "skills", array()), "html", null, true);
            echo "</br>
          <b> Languages :</b>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["entreprise"], "languages", array()), "html", null, true);
            echo "</br>
           </br></br></br>
                 ";
            // line 25
            if (($this->getAttribute((isset($context["etudiant"]) ? $context["etudiant"] : $this->getContext($context, "etudiant")), "role", array()) == "ROLE_ADMIN")) {
                echo ">
                    <ul>
                        <li>
                            <a href=\"";
                // line 28
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("entreprise_show", array("id" => $this->getAttribute($context["entreprise"], "id", array()))), "html", null, true);
                echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
                // line 31
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("entreprise_edit", array("id" => $this->getAttribute($context["entreprise"], "id", array()))), "html", null, true);
                echo "\">edit</a>
                        </li>
                    </ul>
                     ";
            }
            // line 35
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entreprise'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "    

   
        ";
        // line 39
        if (($this->getAttribute((isset($context["etudiant"]) ? $context["etudiant"] : $this->getContext($context, "etudiant")), "role", array()) == "ROLE_ADMIN")) {
            // line 40
            echo "         <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("entreprise_new");
            echo "\">Create a new entreprise</a>
 <a href=\"";
            // line 41
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("entreprise_index");
            echo "\"></a>
 ";
        }
        // line 43
        echo "       
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "entreprise/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 43,  149 => 41,  144 => 40,  142 => 39,  137 => 36,  131 => 35,  124 => 31,  118 => 28,  112 => 25,  107 => 23,  103 => 22,  99 => 21,  95 => 20,  89 => 19,  82 => 18,  78 => 17,  73 => 16,  69 => 15,  61 => 9,  55 => 8,  46 => 5,  41 => 4,  35 => 3,  11 => 1,);
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

{% block javascripts %}
    {{ parent() }}
    <script src=\"{{ asset('assets/js/custom/home.js') }}\"></script>
{% endblock %}

{% block content %}
    <div class=\"container\">
     <div style=\"width:1100px; background:white;\">
            <h1 class=\"box-header\">Enterprise Offers</h1>
            <div class=\"box-content\">           
            <div class=\"publication-item-content\" style=\"margin: 25px;\">

        {% for entreprise in entreprises %}
          <b> EnterPrise : </b> {{ entreprise.idEntreprise }} </br>
          <b> Background : </b>{{ entreprise.background }} </br>
          <b> EarliestStartDate : </b> {% if entreprise.earliestStartDate %} {{ entreprise.earliestStartDate|date('Y-m-d') }}{% endif %} --
          <b> LatestEndDate     : </b>{% if entreprise.latestEndDate %}{{ entreprise.latestEndDate|date('Y-m-d') }}{% endif %} </br>
          <b> Salary     :  </b> {{ entreprise.salary }}</br>
          <b> Positions  : </b>{{ entreprise.positions }}</br>
          <b> Skills     :</b> {{ entreprise.skills }}</br>
          <b> Languages :</b>{{ entreprise.languages }}</br>
           </br></br></br>
                 {% if etudiant.role == 'ROLE_ADMIN' %}>
                    <ul>
                        <li>
                            <a href=\"{{ path('entreprise_show', { 'id': entreprise.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('entreprise_edit', { 'id': entreprise.id }) }}\">edit</a>
                        </li>
                    </ul>
                     {% endif %}
        {% endfor %}
    

   
        {% if etudiant.role == 'ROLE_ADMIN' %}
         <a href=\"{{ path('entreprise_new') }}\">Create a new entreprise</a>
 <a href=\"{{ path('entreprise_index') }}\"></a>
 {% endif %}
       
    </div>
{% endblock %}
   
", "entreprise/index.html.twig", "C:\\wamp\\www\\khairi_pfe\\app\\Resources\\views\\entreprise\\index.html.twig");
    }
}
