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

/* @PrestaShop/Admin/TwigTemplateForm/bootstrap_4_layout.html.twig */
class __TwigTemplate_d9b490b6df02044836669ca3b69008db extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        // line 25
        $_trait_0 = $this->loadTemplate("@PrestaShop/Admin/TwigTemplateForm/form_div_layout.html.twig", "@PrestaShop/Admin/TwigTemplateForm/bootstrap_4_layout.html.twig", 25);
        if (!$_trait_0->isTraitable()) {
            throw new RuntimeError('Template "'."@PrestaShop/Admin/TwigTemplateForm/form_div_layout.html.twig".'" cannot be used as a trait.', 25, $this->source);
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        // line 26
        $_trait_1 = $this->loadTemplate("@PrestaShop/Admin/TwigTemplateForm/typeahead.html.twig", "@PrestaShop/Admin/TwigTemplateForm/bootstrap_4_layout.html.twig", 26);
        if (!$_trait_1->isTraitable()) {
            throw new RuntimeError('Template "'."@PrestaShop/Admin/TwigTemplateForm/typeahead.html.twig".'" cannot be used as a trait.', 26, $this->source);
        }
        $_trait_1_blocks = $_trait_1->getBlocks();

        // line 27
        $_trait_2 = $this->loadTemplate("@PrestaShop/Admin/TwigTemplateForm/material.html.twig", "@PrestaShop/Admin/TwigTemplateForm/bootstrap_4_layout.html.twig", 27);
        if (!$_trait_2->isTraitable()) {
            throw new RuntimeError('Template "'."@PrestaShop/Admin/TwigTemplateForm/material.html.twig".'" cannot be used as a trait.', 27, $this->source);
        }
        $_trait_2_blocks = $_trait_2->getBlocks();

        // line 28
        $_trait_3 = $this->loadTemplate("@PrestaShop/Admin/TwigTemplateForm/translatable_choice.html.twig", "@PrestaShop/Admin/TwigTemplateForm/bootstrap_4_layout.html.twig", 28);
        if (!$_trait_3->isTraitable()) {
            throw new RuntimeError('Template "'."@PrestaShop/Admin/TwigTemplateForm/translatable_choice.html.twig".'" cannot be used as a trait.', 28, $this->source);
        }
        $_trait_3_blocks = $_trait_3->getBlocks();

        $this->traits = array_merge(
            $_trait_0_blocks,
            $_trait_1_blocks,
            $_trait_2_blocks,
            $_trait_3_blocks
        );

        $this->blocks = array_merge(
            $this->traits,
            [
                'form_widget_simple' => [$this, 'block_form_widget_simple'],
                'textarea_widget' => [$this, 'block_textarea_widget'],
                'button_widget' => [$this, 'block_button_widget'],
                'money_widget' => [$this, 'block_money_widget'],
                'percent_widget' => [$this, 'block_percent_widget'],
                'datetime_widget' => [$this, 'block_datetime_widget'],
                'date_widget' => [$this, 'block_date_widget'],
                'time_widget' => [$this, 'block_time_widget'],
                'choice_widget_collapsed' => [$this, 'block_choice_widget_collapsed'],
                'choice_widget_expanded' => [$this, 'block_choice_widget_expanded'],
                'checkbox_widget' => [$this, 'block_checkbox_widget'],
                'radio_widget' => [$this, 'block_radio_widget'],
                'choice_tree_widget' => [$this, 'block_choice_tree_widget'],
                'choice_tree_item_widget' => [$this, 'block_choice_tree_item_widget'],
                'translatefields_widget' => [$this, 'block_translatefields_widget'],
                'translate_fields_widget' => [$this, 'block_translate_fields_widget'],
                'translate_text_widget' => [$this, 'block_translate_text_widget'],
                'translate_textarea_widget' => [$this, 'block_translate_textarea_widget'],
                'date_picker_widget' => [$this, 'block_date_picker_widget'],
                'date_range_widget' => [$this, 'block_date_range_widget'],
                'color_picker_widget' => [$this, 'block_color_picker_widget'],
                'search_and_reset_widget' => [$this, 'block_search_and_reset_widget'],
                'switch_widget' => [$this, 'block_switch_widget'],
                '_form_step6_attachments_widget' => [$this, 'block__form_step6_attachments_widget'],
                'form_label' => [$this, 'block_form_label'],
                'choice_label' => [$this, 'block_choice_label'],
                'checkbox_label' => [$this, 'block_checkbox_label'],
                'radio_label' => [$this, 'block_radio_label'],
                'checkbox_radio_label' => [$this, 'block_checkbox_radio_label'],
                'form_row' => [$this, 'block_form_row'],
                'button_row' => [$this, 'block_button_row'],
                'choice_row' => [$this, 'block_choice_row'],
                'date_row' => [$this, 'block_date_row'],
                'time_row' => [$this, 'block_time_row'],
                'datetime_row' => [$this, 'block_datetime_row'],
                'checkbox_row' => [$this, 'block_checkbox_row'],
                'radio_row' => [$this, 'block_radio_row'],
                'form_errors' => [$this, 'block_form_errors'],
                'material_choice_table_widget' => [$this, 'block_material_choice_table_widget'],
                'material_multiple_choice_table_widget' => [$this, 'block_material_multiple_choice_table_widget'],
                'translatable_widget' => [$this, 'block_translatable_widget'],
                'birthday_widget' => [$this, 'block_birthday_widget'],
                'file_widget' => [$this, 'block_file_widget'],
                'shop_restriction_checkbox_widget' => [$this, 'block_shop_restriction_checkbox_widget'],
                'generatable_text_widget' => [$this, 'block_generatable_text_widget'],
                'text_with_recommended_length_widget' => [$this, 'block_text_with_recommended_length_widget'],
                'integer_min_max_filter_widget' => [$this, 'block_integer_min_max_filter_widget'],
                'number_min_max_filter_widget' => [$this, 'block_number_min_max_filter_widget'],
                'form_help' => [$this, 'block_form_help'],
                'form_hint' => [$this, 'block_form_hint'],
                'custom_content_widget' => [$this, 'block_custom_content_widget'],
                'text_widget' => [$this, 'block_text_widget'],
            ]
        );
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo "
";
        // line 31
        echo "
";
        // line 32
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 38
        echo "
";
        // line 39
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 43
        echo "
";
        // line 44
        $this->displayBlock('button_widget', $context, $blocks);
        // line 48
        echo "
";
        // line 49
        $this->displayBlock('money_widget', $context, $blocks);
        // line 65
        echo "
";
        // line 66
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 74
        echo "
";
        // line 75
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 88
        echo "
";
        // line 89
        $this->displayBlock('date_widget', $context, $blocks);
        // line 107
        echo "
";
        // line 108
        $this->displayBlock('time_widget', $context, $blocks);
        // line 122
        echo "
";
        // line 123
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 128
        echo "
";
        // line 129
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 150
        echo "
";
        // line 151
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 161
        echo "
";
        // line 162
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 172
        echo "
";
        // line 173
        $this->displayBlock('choice_tree_widget', $context, $blocks);
        // line 183
        echo "
";
        // line 184
        $this->displayBlock('choice_tree_item_widget', $context, $blocks);
        // line 222
        echo "
";
        // line 223
        $this->displayBlock('translatefields_widget', $context, $blocks);
        // line 249
        echo "
";
        // line 250
        $this->displayBlock('translate_fields_widget', $context, $blocks);
        // line 256
        echo "
";
        // line 257
        $this->displayBlock('translate_text_widget', $context, $blocks);
        // line 294
        echo "
";
        // line 295
        $this->displayBlock('translate_textarea_widget', $context, $blocks);
        // line 336
        echo "
";
        // line 337
        $this->displayBlock('date_picker_widget', $context, $blocks);
        // line 351
        echo "
";
        // line 352
        $this->displayBlock('date_range_widget', $context, $blocks);
        // line 360
        echo "
";
        // line 361
        $this->displayBlock('color_picker_widget', $context, $blocks);
        // line 369
        echo "
";
        // line 370
        $this->displayBlock('search_and_reset_widget', $context, $blocks);
        // line 395
        echo "
";
        // line 396
        $this->displayBlock('switch_widget', $context, $blocks);
        // line 416
        echo "
";
        // line 417
        $this->displayBlock('_form_step6_attachments_widget', $context, $blocks);
        // line 446
        echo "
";
        // line 448
        echo "
";
        // line 449
        $this->displayBlock('form_label', $context, $blocks);
        // line 452
        echo "
";
        // line 453
        $this->displayBlock('choice_label', $context, $blocks);
        // line 458
        echo "
";
        // line 459
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 462
        echo "
";
        // line 463
        $this->displayBlock('radio_label', $context, $blocks);
        // line 466
        echo "
";
        // line 467
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 496
        echo "
";
        // line 498
        echo "
";
        // line 499
        $this->displayBlock('form_row', $context, $blocks);
        // line 506
        echo "
";
        // line 507
        $this->displayBlock('button_row', $context, $blocks);
        // line 513
        echo "
";
        // line 514
        $this->displayBlock('choice_row', $context, $blocks);
        // line 518
        echo "
";
        // line 519
        $this->displayBlock('date_row', $context, $blocks);
        // line 523
        echo "
";
        // line 524
        $this->displayBlock('time_row', $context, $blocks);
        // line 528
        echo "
";
        // line 529
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 533
        echo "
";
        // line 534
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 540
        echo "
";
        // line 541
        $this->displayBlock('radio_row', $context, $blocks);
        // line 547
        echo "
";
        // line 549
        echo "
";
        // line 550
        $this->displayBlock('form_errors', $context, $blocks);
        // line 579
        echo "

";
        // line 582
        echo "
";
        // line 583
        $this->displayBlock('material_choice_table_widget', $context, $blocks);
        // line 619
        echo "
";
        // line 620
        $this->displayBlock('material_multiple_choice_table_widget', $context, $blocks);
        // line 672
        echo "
";
        // line 673
        $this->displayBlock('translatable_widget', $context, $blocks);
        // line 709
        echo "
";
        // line 710
        $this->displayBlock('birthday_widget', $context, $blocks);
        // line 734
        echo "
";
        // line 735
        $this->displayBlock('file_widget', $context, $blocks);
        // line 762
        echo "
";
        // line 763
        $this->displayBlock('shop_restriction_checkbox_widget', $context, $blocks);
        // line 779
        echo "
";
        // line 780
        $this->displayBlock('generatable_text_widget', $context, $blocks);
        // line 794
        echo "
";
        // line 795
        $this->displayBlock('text_with_recommended_length_widget', $context, $blocks);
        // line 820
        echo "
";
        // line 821
        $this->displayBlock('integer_min_max_filter_widget', $context, $blocks);
        // line 825
        echo "
";
        // line 826
        $this->displayBlock('number_min_max_filter_widget', $context, $blocks);
        // line 830
        echo "
";
        // line 831
        $this->displayBlock('form_help', $context, $blocks);
        // line 836
        echo "
";
        // line 837
        $this->displayBlock('form_hint', $context, $blocks);
        // line 844
        echo "
";
        // line 845
        $this->displayBlock('custom_content_widget', $context, $blocks);
        // line 848
        echo "
";
        // line 849
        $this->displayBlock('text_widget', $context, $blocks);
    }

    // line 32
    public function block_form_widget_simple($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        if (( !array_key_exists("type", $context) || ("file" != ($context["type"] ?? null)))) {
            // line 34
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 34)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 34), "")) : ("")) . " form-control"))]);
        }
        // line 36
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
    }

    // line 39
    public function block_textarea_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 40
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 40)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 40), "")) : ("")) . " form-control"))]);
        // line 41
        $this->displayParentBlock("textarea_widget", $context, $blocks);
    }

    // line 44
    public function block_button_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 45
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 45)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 45), "btn-default")) : ("btn-default")) . " btn"))]);
        // line 46
        $this->displayParentBlock("button_widget", $context, $blocks);
    }

    // line 49
    public function block_money_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 50
        echo "<div class=\"input-group money-type\">
        ";
        // line 51
        $context["prepend"] = ("{{" == twig_slice($this->env, ($context["money_pattern"] ?? null), 0, 2));
        // line 52
        echo "        ";
        if ( !($context["prepend"] ?? null)) {
            // line 53
            echo "            <div class=\"input-group-prepend\">
                <span class=\"input-group-text\">";
            // line 54
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? null), ["{{ widget }}" => ""]), "html", null, true);
            echo "</span>
            </div>
        ";
        }
        // line 57
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 58
        if (($context["prepend"] ?? null)) {
            // line 59
            echo "            <div class=\"input-group-append\">
                <span class=\"input-group-text\">";
            // line 60
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? null), ["{{ widget }}" => ""]), "html", null, true);
            echo "</span>
            </div>
        ";
        }
        // line 63
        echo "    </div>";
    }

    // line 66
    public function block_percent_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 67
        echo "<div class=\"input-group\">";
        // line 68
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 69
        echo "<div class=\"input-group-append\">
            <span class=\"input-group-text\">%</span>
        </div>
    </div>";
    }

    // line 75
    public function block_datetime_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 76
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 77
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 79
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 79)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 79), "")) : ("")) . " form-inline"))]);
            // line 80
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 81
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "date", [], "any", false, false, false, 81), 'errors');
            // line 82
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "time", [], "any", false, false, false, 82), 'errors');
            // line 83
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "date", [], "any", false, false, false, 83), 'widget', ["datetime" => true]);
            // line 84
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "time", [], "any", false, false, false, 84), 'widget', ["datetime" => true]);
            // line 85
            echo "</div>";
        }
    }

    // line 89
    public function block_date_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 90
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 91
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 93
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 93)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 93), "")) : ("")) . " form-inline"))]);
            // line 94
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? null))) {
                // line 95
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 97
            echo twig_replace_filter(($context["date_pattern"] ?? null), ["{{ year }}" =>             // line 98
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "year", [], "any", false, false, false, 98), 'widget'), "{{ month }}" =>             // line 99
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "month", [], "any", false, false, false, 99), 'widget'), "{{ day }}" =>             // line 100
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "day", [], "any", false, false, false, 100), 'widget')]);
            // line 102
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? null))) {
                // line 103
                echo "</div>";
            }
        }
    }

    // line 108
    public function block_time_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 109
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 110
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 112
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 112)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 112), "")) : ("")) . " form-inline"))]);
            // line 113
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? null)))) {
                // line 114
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 116
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "hour", [], "any", false, false, false, 116), 'widget');
            echo ":";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "minute", [], "any", false, false, false, 116), 'widget');
            if (($context["with_seconds"] ?? null)) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "second", [], "any", false, false, false, 116), 'widget');
            }
            // line 117
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? null)))) {
                // line 118
                echo "</div>";
            }
        }
    }

    // line 123
    public function block_choice_widget_collapsed($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 124
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 124)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 124), "")) : ("")) . " custom-select"))]);
        // line 125
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["aria-label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("%inputId% input", ["%inputId%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 125), "id", [], "any", false, false, false, 125)], "Admin.Global")]);
        // line 126
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
    }

    // line 129
    public function block_choice_widget_expanded($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 130
        if (twig_in_filter("-inline", ((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 130)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 130), "")) : ("")))) {
            // line 131
            echo "<div class=\"control-group\">";
            // line 132
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 133
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["parent_label_class" => ((twig_get_attribute($this->env, $this->source,                 // line 134
($context["label_attr"] ?? null), "class", [], "any", true, true, false, 134)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 134), "")) : ("")), "translation_domain" =>                 // line 135
($context["choice_translation_domain"] ?? null)]);
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 138
            echo "</div>";
        } else {
            // line 140
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 141
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 142
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["parent_label_class" => ((twig_get_attribute($this->env, $this->source,                 // line 143
($context["label_attr"] ?? null), "class", [], "any", true, true, false, 143)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 143), "")) : ("")), "translation_domain" =>                 // line 144
($context["choice_translation_domain"] ?? null)]);
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 147
            echo "</div>";
        }
    }

    // line 151
    public function block_checkbox_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 152
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? null), "")) : (""));
        // line 153
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? null))) {
            // line 154
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', ["widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)]);
        } else {
            // line 156
            echo "<div class=\"checkbox\">";
            // line 157
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', ["widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)]);
            // line 158
            echo "</div>";
        }
    }

    // line 162
    public function block_radio_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 163
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? null), "")) : (""));
        // line 164
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? null))) {
            // line 165
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', ["widget" => $this->renderParentBlock("radio_widget", $context, $blocks)]);
        } else {
            // line 167
            echo "<div class=\"radio form-check form-check-radio\">";
            // line 168
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', ["widget" => $this->renderParentBlock("radio_widget", $context, $blocks)]);
            // line 169
            echo "</div>";
        }
    }

    // line 173
    public function block_choice_tree_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 174
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo " class=\"category-tree-overflow\">
        <ul class=\"category-tree\">
            <li class=\"form-control-label text-right main-category\">";
        // line 176
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Main category", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</li>";
        // line 177
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["choices"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 178
            echo "            ";
            $this->displayBlock("choice_tree_item_widget", $context, $blocks);
            echo "
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 180
        echo "</ul>
    </div>";
    }

    // line 184
    public function block_choice_tree_item_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 185
        echo "<li";
        if ((array_key_exists("defaultHidden", $context) && (($context["defaultHidden"] ?? null) === true))) {
            echo " class=\"more\"";
        }
        echo ">
        ";
        // line 186
        $context["checked"] = (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 186), "submitted_values", [], "any", true, true, false, 186) && twig_get_attribute($this->env, $this->source, ($context["submitted_values"] ?? null), twig_get_attribute($this->env, $this->source, ($context["child"] ?? null), "id_category", [], "any", false, false, false, 186), [], "array", true, true, false, 186));
        // line 187
        echo "        ";
        if (($context["multiple"] ?? null)) {
            // line 188
            echo "<div class=\"checkbox\">
                <label>
                    <input type=\"checkbox\" name=\"";
            // line 190
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 190), "full_name", [], "any", false, false, false, 190), "html", null, true);
            echo "[tree][]\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["child"] ?? null), "id_category", [], "any", false, false, false, 190), "html", null, true);
            echo "\"";
            if (($context["checked"] ?? null)) {
                echo " checked=\"checked\"";
            }
            echo " class=\"category\">
                    ";
            // line 191
            if ((twig_get_attribute($this->env, $this->source, ($context["child"] ?? null), "active", [], "any", true, true, false, 191) && (twig_get_attribute($this->env, $this->source, ($context["child"] ?? null), "active", [], "any", false, false, false, 191) == 0))) {
                // line 192
                echo "                        <i>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["child"] ?? null), "name", [], "any", false, false, false, 192), "html", null, true);
                echo "</i>";
            } else {
                // line 194
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["child"] ?? null), "name", [], "any", false, false, false, 194), "html", null, true);
                echo "
                    ";
            }
            // line 196
            echo "                    ";
            if (array_key_exists("defaultCategory", $context)) {
                // line 197
                echo "                        <input type=\"radio\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["child"] ?? null), "id_category", [], "any", false, false, false, 197), "html", null, true);
                echo "\" name=\"ignore\" class=\"default-category\" />
                    ";
            }
            // line 199
            echo "                </label>
            </div>";
        } else {
            // line 202
            echo "<div class=\"radio\">
              <label>
                <input type=\"radio\" name=\"form[";
            // line 204
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 204), "id", [], "any", false, false, false, 204), "html", null, true);
            echo "][tree]\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["child"] ?? null), "id_category", [], "any", false, false, false, 204), "html", null, true);
            echo "\"";
            if (($context["checked"] ?? null)) {
                echo " checked=\"checked\"";
            }
            echo " class=\"category\"";
            if (($context["required"] ?? null)) {
                echo " required";
            }
            echo ">
                    ";
            // line 205
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["child"] ?? null), "name", [], "any", false, false, false, 205), "html", null, true);
            echo "
                    ";
            // line 206
            if (array_key_exists("defaultCategory", $context)) {
                // line 207
                echo "                        <input type=\"radio\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["child"] ?? null), "id_category", [], "any", false, false, false, 207), "html", null, true);
                echo "\" name=\"ignore\" class=\"default-category\" />
                    ";
            }
            // line 209
            echo "                </label>
            </div>";
        }
        // line 212
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["child"] ?? null), "children", [], "any", true, true, false, 212)) {
            // line 213
            echo "            <ul";
            if ((array_key_exists("defaultHidden", $context) && (($context["defaultHidden"] ?? null) === true))) {
                echo " style=\"display: none;\"";
            }
            echo ">
                ";
            // line 214
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["child"] ?? null), "children", [], "any", false, false, false, 214));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 215
                echo "                    ";
                $context["child"] = $context["item"];
                // line 216
                echo "                    ";
                $this->displayBlock("choice_tree_item_widget", $context, $blocks);
                echo "
                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 218
            echo "</ul>
        ";
        }
        // line 220
        echo "    </li>";
    }

    // line 223
    public function block_translatefields_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 224
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "
    <div class=\"translations tabbable\" id=\"";
        // line 225
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 225), "id", [], "any", false, false, false, 225), "html", null, true);
        echo "\">
        ";
        // line 226
        if (((($context["hideTabs"] ?? null) == false) && (twig_length_filter($this->env, ($context["form"] ?? null)) > 1))) {
            // line 227
            echo "        <ul class=\"translationsLocales nav nav-pills\">
            ";
            // line 228
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["translationsFields"]) {
                // line 229
                echo "                <li class=\"nav-item\">
                    <a href=\"#\" data-locale=\"";
                // line 230
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 230), "label", [], "any", false, false, false, 230), "html", null, true);
                echo "\" class=\"";
                if ((twig_get_attribute($this->env, $this->source, ($context["defaultLocale"] ?? null), "id_lang", [], "any", false, false, false, 230) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 230), "name", [], "any", false, false, false, 230))) {
                    echo "active";
                }
                echo " nav-link\" data-toggle=\"tab\" data-target=\".translationsFields-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 230), "id", [], "any", false, false, false, 230), "html", null, true);
                echo "\">
                        ";
                // line 231
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 231), "label", [], "any", false, false, false, 231)), "html", null, true);
                echo "
                    </a>
                </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsFields'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 235
            echo "        </ul>
        ";
        }
        // line 237
        echo "
        <div class=\"translationsFields tab-content\">
            ";
        // line 239
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["translationsFields"]) {
            // line 240
            echo "                <div data-locale=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 240), "label", [], "any", false, false, false, 240), "html", null, true);
            echo "\" class=\"translationsFields-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 240), "id", [], "any", false, false, false, 240), "html", null, true);
            echo " tab-pane translation-field ";
            if (((($context["hideTabs"] ?? null) == false) && (twig_length_filter($this->env, ($context["form"] ?? null)) > 1))) {
                echo "panel panel-default";
            }
            echo " ";
            if ((twig_get_attribute($this->env, $this->source, ($context["defaultLocale"] ?? null), "id_lang", [], "any", false, false, false, 240) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 240), "name", [], "any", false, false, false, 240))) {
                echo "show active";
            }
            echo " ";
            if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 240), "valid", [], "any", false, false, false, 240)) {
                echo "field-error";
            }
            echo " translation-label-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 240), "label", [], "any", false, false, false, 240), "html", null, true);
            echo "\">
                    ";
            // line 241
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["translationsFields"], 'errors');
            echo "
                    ";
            // line 242
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["translationsFields"], 'widget');
            // line 243
            $this->displayBlock("form_help", $context, $blocks);
            // line 244
            echo "</div>
            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsFields'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 246
        echo "        </div>
    </div>
";
    }

    // line 250
    public function block_translate_fields_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 251
        if (( !array_key_exists("type", $context) || ("file" != ($context["type"] ?? null)))) {
            // line 252
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 252)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 252), "")) : ("")) . " form-control"))]);
        }
        // line 254
        $this->displayParentBlock("translate_fields_widget", $context, $blocks);
    }

    // line 257
    public function block_translate_text_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 258
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "
    <div class=\"input-group locale-input-group js-locale-input-group\">
        ";
        // line 260
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["translateField"]) {
            // line 261
            echo "            ";
            $context["classes"] = (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translateField"], "vars", [], "any", false, true, false, 261), "attr", [], "any", false, true, false, 261), "class", [], "any", true, true, false, 261)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translateField"], "vars", [], "any", false, true, false, 261), "attr", [], "any", false, true, false, 261), "class", [], "any", false, false, false, 261), "")) : ("")) . " js-locale-input");
            // line 262
            echo "            ";
            $context["classes"] = ((($context["classes"] ?? null) . " js-locale-") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translateField"], "vars", [], "any", false, false, false, 262), "label", [], "any", false, false, false, 262));
            // line 263
            echo "
            ";
            // line 264
            if ((twig_get_attribute($this->env, $this->source, ($context["default_locale"] ?? null), "id_lang", [], "any", false, false, false, 264) != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translateField"], "vars", [], "any", false, false, false, 264), "name", [], "any", false, false, false, 264))) {
                // line 265
                echo "                ";
                $context["classes"] = (($context["classes"] ?? null) . " d-none");
                // line 266
                echo "            ";
            }
            // line 267
            echo "
            ";
            // line 268
            $context["attr"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translateField"], "vars", [], "any", false, false, false, 268), "attr", [], "any", false, false, false, 268);
            // line 269
            echo "
            ";
            // line 270
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["translateField"], 'widget', ["attr" => ["class" => twig_trim_filter(($context["classes"] ?? null))]]);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translateField'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 272
        echo "
        ";
        // line 273
        if ( !($context["hide_locales"] ?? null)) {
            // line 274
            echo "        <div class=\"dropdown\">
            <button class=\"btn btn-outline-secondary dropdown-toggle js-locale-btn\"
                    type=\"button\"
                    data-toggle=\"dropdown\"
                    aria-haspopup=\"true\"
                    aria-expanded=\"false\"
                    id=\"";
            // line 280
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 280), "id", [], "any", false, false, false, 280), "html", null, true);
            echo "\"
            >
                ";
            // line 282
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 282), "default_locale", [], "any", false, false, false, 282), "iso_code", [], "any", false, false, false, 282), "html", null, true);
            echo "
            </button>

            <div class=\"dropdown-menu dropdown-menu-right locale-dropdown-menu\" aria-labelledby=\"";
            // line 285
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 285), "id", [], "any", false, false, false, 285), "html", null, true);
            echo "\">
                ";
            // line 286
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["locales"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
                // line 287
                echo "                    <span class=\"dropdown-item js-locale-item\" data-locale=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["locale"], "iso_code", [], "any", false, false, false, 287), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["locale"], "name", [], "any", false, false, false, 287), "html", null, true);
                echo "</span>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 289
            echo "            </div>
        </div>
        ";
        }
        // line 292
        echo "    </div>";
    }

    // line 295
    public function block_translate_textarea_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 296
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "
  <div class=\"input-group locale-input-group js-locale-input-group\">
    ";
        // line 298
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["textarea"]) {
            // line 299
            echo "      ";
            $context["classes"] = (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["textarea"], "vars", [], "any", false, true, false, 299), "attr", [], "any", false, true, false, 299), "class", [], "any", true, true, false, 299)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["textarea"], "vars", [], "any", false, true, false, 299), "attr", [], "any", false, true, false, 299), "class", [], "any", false, false, false, 299), "")) : ("")) . " js-locale-input");
            // line 300
            echo "      ";
            $context["classes"] = ((($context["classes"] ?? null) . " js-locale-") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["textarea"], "vars", [], "any", false, false, false, 300), "label", [], "any", false, false, false, 300));
            // line 301
            echo "
      ";
            // line 302
            if ((twig_get_attribute($this->env, $this->source, ($context["default_locale"] ?? null), "id_lang", [], "any", false, false, false, 302) != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["textarea"], "vars", [], "any", false, false, false, 302), "name", [], "any", false, false, false, 302))) {
                // line 303
                echo "        ";
                $context["classes"] = (($context["classes"] ?? null) . " d-none");
                // line 304
                echo "      ";
            }
            // line 305
            echo "
      <div class=\"";
            // line 306
            echo twig_escape_filter($this->env, ($context["classes"] ?? null), "html", null, true);
            echo "\">
        ";
            // line 307
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["textarea"], 'widget', ["attr" => ["class" => twig_trim_filter(($context["classes"] ?? null))]]);
            echo "
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['textarea'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 310
        echo "
    ";
        // line 311
        if (($context["show_locale_select"] ?? null)) {
            // line 312
            echo "      <div class=\"dropdown\">
        <button class=\"btn btn-outline-secondary dropdown-toggle js-locale-btn\"
                type=\"button\"
                data-toggle=\"dropdown\"
                aria-haspopup=\"true\"
                aria-expanded=\"false\"
                id=\"";
            // line 318
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 318), "id", [], "any", false, false, false, 318), "html", null, true);
            echo "\"
        >
          ";
            // line 320
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 320), "default_locale", [], "any", false, false, false, 320), "iso_code", [], "any", false, false, false, 320), "html", null, true);
            echo "
        </button>

        <div class=\"dropdown-menu dropdown-menu-right locale-dropdown-menu\" aria-labelledby=\"";
            // line 323
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 323), "id", [], "any", false, false, false, 323), "html", null, true);
            echo "\">
          ";
            // line 324
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["locales"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
                // line 325
                echo "            <span class=\"dropdown-item js-locale-item\"
                  data-locale=\"";
                // line 326
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["locale"], "iso_code", [], "any", false, false, false, 326), "html", null, true);
                echo "\"
            >
              ";
                // line 328
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["locale"], "name", [], "any", false, false, false, 328), "html", null, true);
                echo "
            </span>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 331
            echo "        </div>
      </div>
    ";
        }
        // line 334
        echo "  </div>";
    }

    // line 337
    public function block_date_picker_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 338
        echo "  ";
        ob_start(function () { return ''; });
        // line 339
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 339)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 339), "")) : ("")) . " datepicker form-control"))]);
        // line 340
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["aria-label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("%inputId% input", ["%inputId%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 340), "id", [], "any", false, false, false, 340)], "Admin.Global")]);
        // line 341
        echo "<div class=\"input-group datepicker\">
      <input type=\"text\" data-format=\"";
        // line 342
        echo twig_escape_filter($this->env, ($context["date_format"] ?? null), "html", null, true);
        echo "\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty(($context["value"] ?? null))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\" ";
        }
        echo "/>
      <div class=\"input-group-append\">
        <div class=\"input-group-text\">
          <i class=\"material-icons\">date_range</i>
        </div>
      </div>
    </div>
  ";
        $___internal_parse_4_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 338
        echo twig_spaceless($___internal_parse_4_);
    }

    // line 352
    public function block_date_range_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 353
        echo "  ";
        ob_start(function () { return ''; });
        // line 354
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "from", [], "any", false, false, false, 354), 'widget');
        echo "
    ";
        // line 355
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "from", [], "any", false, false, false, 355), 'errors');
        echo "
    ";
        // line 356
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "to", [], "any", false, false, false, 356), 'widget');
        echo "
    ";
        // line 357
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "to", [], "any", false, false, false, 357), 'errors');
        echo "
  ";
        $___internal_parse_5_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 353
        echo twig_spaceless($___internal_parse_5_);
    }

    // line 361
    public function block_color_picker_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 362
        echo "  ";
        ob_start(function () { return ''; });
        // line 363
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 363)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 363), "")) : ("")) . " form-control colorpicker"))]);
        // line 364
        echo "    <div class=\"input-group colorpicker\">
      <input type=\"text\" ";
        // line 365
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty(($context["value"] ?? null))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\" ";
        }
        echo "/>
    </div>
  ";
        $___internal_parse_6_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 362
        echo twig_spaceless($___internal_parse_6_);
    }

    // line 370
    public function block_search_and_reset_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 371
        echo "    ";
        ob_start(function () { return ''; });
        // line 372
        echo "        <button type=\"submit\"
                class=\"btn btn-primary grid-search-button d-block\"
                title=\"";
        // line 374
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search", [], "Admin.Actions"), "html", null, true);
        echo "\"
                name=\"";
        // line 375
        echo twig_escape_filter($this->env, ($context["full_name"] ?? null), "html", null, true);
        echo "[search]\"
        >
          <i class=\"material-icons\">search</i>
          ";
        // line 378
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search", [], "Admin.Actions"), "html", null, true);
        echo "
        </button>
      ";
        // line 380
        if (($context["show_reset_button"] ?? null)) {
            // line 381
            echo "          <div class=\"js-grid-reset-button\">
            <button type=\"reset\"
                    name=\"";
            // line 383
            echo twig_escape_filter($this->env, ($context["full_name"] ?? null), "html", null, true);
            echo "[reset]\"
                    class=\"btn btn-link js-reset-search btn d-block grid-reset-button\"
                    data-url=\"";
            // line 385
            echo twig_escape_filter($this->env, ($context["reset_url"] ?? null), "html", null, true);
            echo "\"
                    data-redirect=\"";
            // line 386
            echo twig_escape_filter($this->env, ($context["redirect_url"] ?? null), "html", null, true);
            echo "\"
            >
              <i class=\"material-icons\">clear</i>
              ";
            // line 389
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Reset", [], "Admin.Actions"), "html", null, true);
            echo "
            </button>
          </div>
      ";
        }
        // line 393
        echo "    ";
        $___internal_parse_7_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 371
        echo twig_spaceless($___internal_parse_7_);
    }

    // line 396
    public function block_switch_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 397
        echo "    ";
        ob_start(function () { return ''; });
        // line 398
        echo "    <span class=\"ps-switch\">
        ";
        // line 399
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["choices"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["choice"]) {
            // line 400
            echo "            ";
            $context["inputId"] = ((($context["id"] ?? null) . "_") . twig_get_attribute($this->env, $this->source, $context["choice"], "value", [], "any", false, false, false, 400));
            // line 401
            echo "            <input id=\"";
            echo twig_escape_filter($this->env, ($context["inputId"] ?? null), "html", null, true);
            echo "\"
                ";
            // line 402
            $this->displayBlock("attributes", $context, $blocks);
            echo "
                name=\"";
            // line 403
            echo twig_escape_filter($this->env, ($context["full_name"] ?? null), "html", null, true);
            echo "\"
                value=\"";
            // line 404
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["choice"], "value", [], "any", false, false, false, 404), "html", null, true);
            echo "\"
                ";
            // line 405
            if (Symfony\Bridge\Twig\Extension\twig_is_selected_choice($context["choice"], ($context["value"] ?? null))) {
                echo "checked=\"\"";
            }
            // line 406
            echo "                ";
            if (($context["disabled"] ?? null)) {
                echo "disabled=\"\"";
            }
            // line 407
            echo "                type=\"radio\"
                aria-label=\"";
            // line 408
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["choice"], "label", [], "any", false, false, false, 408), [], ($context["choice_translation_domain"] ?? null)), "html", null, true);
            echo "\"
                >
            <label for=\"";
            // line 410
            echo twig_escape_filter($this->env, ($context["inputId"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["choice"], "label", [], "any", false, false, false, 410), [], ($context["choice_translation_domain"] ?? null)), "html", null, true);
            echo "</label>
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 412
        echo "        <span class=\"slide-button\"></span>
    </span>
    ";
        $___internal_parse_8_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 397
        echo twig_spaceless($___internal_parse_8_);
    }

    // line 417
    public function block__form_step6_attachments_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 418
        echo "    <div class=\"js-options-no-attachments ";
        echo (((twig_length_filter($this->env, ($context["form"] ?? null)) > 0)) ? ("hide") : (""));
        echo "\">
        <small>";
        // line 419
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("There is no attachment yet.", [], "Admin.Catalog.Notification"), "html", null, true);
        echo "</small>
    </div>
    <div id=\"product-attachments\" class=\"panel panel-default\">
      <div class=\"panel-body js-options-with-attachments ";
        // line 422
        echo (((twig_length_filter($this->env, ($context["form"] ?? null)) == 0)) ? ("hide") : (""));
        echo "\">
        <div>
          <table id=\"product-attachment-file\" class=\"table\">
            <thead class=\"thead-default\">
              <tr>
                <th class=\"col-md-3\">";
        // line 427
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Title", [], "Admin.Global"), "html", null, true);
        echo "</th>
                <th class=\"col-md-6\">";
        // line 428
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("File name", [], "Admin.Global"), "html", null, true);
        echo "</th>
                <th class=\"col-md-2\">";
        // line 429
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Type", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</th>
              </tr>
            </thead>
            <tbody>";
        // line 433
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 434
            echo "              <tr>
                <td class=\"col-md-3\">";
            // line 435
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget');
            echo "</td>
                <td class=\"col-md-6 file-name\"><span>";
            // line 436
            echo twig_escape_filter($this->env, (($__internal_compile_0 = (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 436), "attr", [], "any", false, false, false, 436), "data", [], "any", false, false, false, 436)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 436)] ?? null) : null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["file_name"] ?? null) : null), "html", null, true);
            echo "</span></td>
                <td class=\"col-md-2\">";
            // line 437
            echo twig_escape_filter($this->env, (($__internal_compile_2 = (($__internal_compile_3 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 437), "attr", [], "any", false, false, false, 437), "data", [], "any", false, false, false, 437)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 437)] ?? null) : null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["mime"] ?? null) : null), "html", null, true);
            echo "</td>
              </tr>
            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 440
        echo "</tbody>
          </table>
        </div>
      </div>
    </div>
";
    }

    // line 449
    public function block_form_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 450
        $this->displayParentBlock("form_label", $context, $blocks);
    }

    // line 453
    public function block_choice_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 455
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["class" => twig_trim_filter(twig_replace_filter(((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 455)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 455), "")) : ("")), ["checkbox-inline" => "", "radio-inline" => ""]))]);
        // line 456
        $this->displayBlock("form_label", $context, $blocks);
    }

    // line 459
    public function block_checkbox_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 460
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
    }

    // line 463
    public function block_radio_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 464
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
    }

    // line 467
    public function block_checkbox_radio_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 468
        echo "    ";
        // line 469
        echo "    ";
        if (array_key_exists("widget", $context)) {
            // line 470
            echo "      ";
            if (($context["required"] ?? null)) {
                // line 471
                echo "        ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 471)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 471), "")) : ("")) . " required"))]);
                // line 472
                echo "      ";
            }
            // line 473
            echo "      ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 474
                echo "          ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 474)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 474), "")) : ("")) . " ") . ($context["parent_label_class"] ?? null)))]);
                // line 475
                echo "      ";
            }
            // line 476
            echo "      ";
            if (( !(($context["label"] ?? null) === false) && twig_test_empty(($context["label"] ?? null)))) {
                // line 477
                echo "          ";
                $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(($context["name"] ?? null));
                // line 478
                echo "      ";
            }
            // line 479
            echo "
      ";
            // line 480
            if ((array_key_exists("material_design", $context) || twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "material_design", [], "any", true, true, false, 480))) {
                // line 481
                echo "        <div class=\"md-checkbox md-checkbox-inline\">
          <label";
                // line 482
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? null));
                foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                    echo " ";
                    echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                    echo "\"";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo ">";
                // line 483
                echo ($context["widget"] ?? null);
                // line 484
                echo "<i class=\"md-checkbox-control\"></i>";
                // line 485
                echo (( !(($context["label"] ?? null) === false)) ? ((((($context["translation_domain"] ?? null) === false)) ? (($context["label"] ?? null)) : (($context["label"] ?? null)))) : (""));
                // line 486
                echo "</label>
        </div>
      ";
            } else {
                // line 489
                echo "      <label";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? null));
                foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                    echo " ";
                    echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                    if (($context["attrname"] === "class")) {
                        echo " form-check-label";
                    }
                    echo "\"";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                if ((twig_length_filter($this->env, ($context["label_attr"] ?? null)) <= 0)) {
                    echo " class=\"form-check-label\"";
                }
                echo ">";
                // line 490
                echo ($context["widget"] ?? null);
                // line 491
                echo (( !(($context["label"] ?? null) === false)) ? ((((($context["translation_domain"] ?? null) === false)) ? (($context["label"] ?? null)) : (($context["label"] ?? null)))) : (""));
                // line 492
                echo "</label>
      ";
            }
            // line 494
            echo "    ";
        }
    }

    // line 499
    public function block_form_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 500
        echo "<div class=\"form-group";
        if ((( !($context["compound"] ?? null) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? null), false)) : (false))) &&  !($context["valid"] ?? null))) {
            echo " has-error";
        }
        echo "\">";
        // line 501
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
        // line 502
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 503
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 504
        echo "</div>";
    }

    // line 507
    public function block_button_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 508
        $context["rowClass"] = ("form-group " . twig_trim_filter(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 508), "row_attr", [], "any", false, true, false, 508), "class", [], "any", true, true, false, 508)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 508), "row_attr", [], "any", false, true, false, 508), "class", [], "any", false, false, false, 508), "")) : (""))));
        // line 509
        echo "    <div class=\"";
        echo twig_escape_filter($this->env, ($context["rowClass"] ?? null), "html", null, true);
        echo "\">";
        // line 510
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 511
        echo "</div>";
    }

    // line 514
    public function block_choice_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 515
        $context["force_error"] = true;
        // line 516
        $this->displayBlock("form_row", $context, $blocks);
    }

    // line 519
    public function block_date_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 520
        $context["force_error"] = true;
        // line 521
        $this->displayBlock("form_row", $context, $blocks);
    }

    // line 524
    public function block_time_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 525
        $context["force_error"] = true;
        // line 526
        $this->displayBlock("form_row", $context, $blocks);
    }

    // line 529
    public function block_datetime_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 530
        $context["force_error"] = true;
        // line 531
        $this->displayBlock("form_row", $context, $blocks);
    }

    // line 534
    public function block_checkbox_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 535
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? null)) {
            echo " has-error";
        }
        echo "\">";
        // line 536
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 537
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 538
        echo "</div>";
    }

    // line 541
    public function block_radio_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 542
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? null)) {
            echo " has-error";
        }
        echo "\">";
        // line 543
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 544
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 545
        echo "</div>";
    }

    // line 550
    public function block_form_errors($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 551
        if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 0)) {
            // line 552
            echo "<div class=\"alert alert-danger\">";
            // line 553
            if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 1)) {
                // line 554
                echo "<ul class=\"alert-text\">";
                // line 555
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 556
                    echo "<li> ";
                    echo twig_escape_filter($this->env, (((null === twig_get_attribute($this->env, $this->source,                     // line 557
$context["error"], "messagePluralization", [], "any", false, false, false, 557))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source,                     // line 558
$context["error"], "messageTemplate", [], "any", false, false, false, 558), twig_get_attribute($this->env, $this->source, $context["error"], "messageParameters", [], "any", false, false, false, 558), "form_error")) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->transchoice(twig_get_attribute($this->env, $this->source,                     // line 559
$context["error"], "messageTemplate", [], "any", false, false, false, 559), twig_get_attribute($this->env, $this->source, $context["error"], "messagePluralization", [], "any", false, false, false, 559), twig_get_attribute($this->env, $this->source, $context["error"], "messageParameters", [], "any", false, false, false, 559), "form_error"))), "html", null, true);
                    // line 560
                    echo "
                    </li>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 563
                echo "</ul>";
            } else {
                // line 565
                echo "<div class=\"alert-text\">";
                // line 566
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 567
                    echo "<p> ";
                    echo twig_escape_filter($this->env, (((null === twig_get_attribute($this->env, $this->source,                     // line 568
$context["error"], "messagePluralization", [], "any", false, false, false, 568))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source,                     // line 569
$context["error"], "messageTemplate", [], "any", false, false, false, 569), twig_get_attribute($this->env, $this->source, $context["error"], "messageParameters", [], "any", false, false, false, 569), "form_error")) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->transchoice(twig_get_attribute($this->env, $this->source,                     // line 570
$context["error"], "messageTemplate", [], "any", false, false, false, 570), twig_get_attribute($this->env, $this->source, $context["error"], "messagePluralization", [], "any", false, false, false, 570), twig_get_attribute($this->env, $this->source, $context["error"], "messageParameters", [], "any", false, false, false, 570), "form_error"))), "html", null, true);
                    // line 571
                    echo "
                </p>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 574
                echo "</div>";
            }
            // line 576
            echo "</div>";
        }
    }

    // line 583
    public function block_material_choice_table_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 584
        echo "  ";
        ob_start(function () { return ''; });
        // line 585
        echo "    <div class=\"choice-table\">
      <table class=\"table table-bordered mb-0\">
        <thead>
          <tr>
            <th class=\"checkbox\">
              <div class=\"md-checkbox\">
                <label>
                  <input
                    type=\"checkbox\"
                    class=\"js-choice-table-select-all\"
                    ";
        // line 595
        if (($context["isCheckSelectAll"] ?? null)) {
            // line 596
            echo "                      checked
                    ";
        }
        // line 598
        echo "                  >
                  <i class=\"md-checkbox-control\"></i>
                  ";
        // line 600
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Select all", [], "Admin.Actions"), "html", null, true);
        echo "
                </label>
              </div>
            </th>
          </tr>
        </thead>
        <tbody>
        ";
        // line 607
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 608
            echo "          <tr>
            <td>
              ";
            // line 610
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["material_design" => true]);
            echo "
            </td>
          </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 614
        echo "        </tbody>
      </table>
    </div>
  ";
        $___internal_parse_9_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 584
        echo twig_spaceless($___internal_parse_9_);
    }

    // line 620
    public function block_material_multiple_choice_table_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 621
        echo "  ";
        ob_start(function () { return ''; });
        // line 622
        echo "    <div class=\"choice-table";
        if (($context["headers_fixed"] ?? null)) {
            echo "-headers-fixed";
        }
        echo " table-responsive\">
      <table class=\"table\">
        <thead>
          <tr>
            <th>";
        // line 626
        echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
        echo "</th>
            ";
        // line 627
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["child_choice"]) {
            // line 628
            echo "              <th class=\"text-center\">
                ";
            // line 629
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child_choice"], "vars", [], "any", false, false, false, 629), "multiple", [], "any", false, false, false, 629) && !twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child_choice"], "vars", [], "any", false, false, false, 629), "name", [], "any", false, false, false, 629), ($context["headers_to_disable"] ?? null)))) {
                // line 630
                echo "                  <a href=\"#\"
                     class=\"js-multiple-choice-table-select-column\"
                     data-column-num=\"";
                // line 632
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 632) + 1), "html", null, true);
                echo "\"
                     data-column-checked=\"false\"
                  >
                    ";
                // line 635
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child_choice"], "vars", [], "any", false, false, false, 635), "label", [], "any", false, false, false, 635), "html", null, true);
                echo "
                  </a>
                ";
            } else {
                // line 638
                echo "                  ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child_choice"], "vars", [], "any", false, false, false, 638), "label", [], "any", false, false, false, 638), "html", null, true);
                echo "
                ";
            }
            // line 640
            echo "              </th>
            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child_choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 642
        echo "          </tr>
        </thead>
        <tbody>
        ";
        // line 645
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["choices"] ?? null));
        foreach ($context['_seq'] as $context["choice_name"] => $context["choice_value"]) {
            // line 646
            echo "          <tr>
            <td>
              ";
            // line 648
            echo twig_escape_filter($this->env, $context["choice_name"], "html", null, true);
            echo "
            </td>
            ";
            // line 650
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
            foreach ($context['_seq'] as $context["child_choice_name"] => $context["child_choice"]) {
                // line 651
                echo "              <td class=\"text-center\">
                ";
                // line 652
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["child_choice_entry_index_mapping"] ?? null), $context["choice_value"], [], "array", false, true, false, 652), $context["child_choice_name"], [], "array", true, true, false, 652)) {
                    // line 653
                    echo "                  ";
                    $context["entry_index"] = (($__internal_compile_4 = (($__internal_compile_5 = ($context["child_choice_entry_index_mapping"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[$context["choice_value"]] ?? null) : null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[$context["child_choice_name"]] ?? null) : null);
                    // line 654
                    echo "
                  ";
                    // line 655
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child_choice"], "vars", [], "any", false, false, false, 655), "multiple", [], "any", false, false, false, 655)) {
                        // line 656
                        echo "                    ";
                        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((($__internal_compile_6 = $context["child_choice"]) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[($context["entry_index"] ?? null)] ?? null) : null), 'widget', ["material_design" => true]);
                        echo "
                  ";
                    } else {
                        // line 658
                        echo "                    ";
                        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((($__internal_compile_7 = $context["child_choice"]) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[($context["entry_index"] ?? null)] ?? null) : null), 'widget');
                        echo "
                  ";
                    }
                    // line 660
                    echo "                ";
                } else {
                    // line 661
                    echo "                  --
                ";
                }
                // line 663
                echo "              </td>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['child_choice_name'], $context['child_choice'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 665
            echo "          </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['choice_name'], $context['choice_value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 667
        echo "        </tbody>
      </table>
    </div>
  ";
        $___internal_parse_10_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 621
        echo twig_spaceless($___internal_parse_10_);
    }

    // line 673
    public function block_translatable_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 674
        $context["formClass"] = (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 674), "attr", [], "any", false, true, false, 674), "class", [], "any", true, true, false, 674)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 674), "attr", [], "any", false, true, false, 674), "class", [], "any", false, false, false, 674), "")) : ("")) . twig_trim_filter(" input-group locale-input-group js-locale-input-group d-flex"));
        // line 675
        echo "  <div class=\"";
        echo twig_escape_filter($this->env, ($context["formClass"] ?? null), "html", null, true);
        echo "\">
    ";
        // line 676
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["translateField"]) {
            // line 677
            echo "      ";
            $context["classes"] = (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translateField"], "vars", [], "any", false, true, false, 677), "attr", [], "any", false, true, false, 677), "class", [], "any", true, true, false, 677)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translateField"], "vars", [], "any", false, true, false, 677), "attr", [], "any", false, true, false, 677), "class", [], "any", false, false, false, 677), "")) : ("")) . " js-locale-input");
            // line 678
            echo "      ";
            $context["classes"] = ((($context["classes"] ?? null) . " js-locale-") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translateField"], "vars", [], "any", false, false, false, 678), "label", [], "any", false, false, false, 678));
            // line 679
            echo "      ";
            if ((twig_get_attribute($this->env, $this->source, ($context["default_locale"] ?? null), "id_lang", [], "any", false, false, false, 679) != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translateField"], "vars", [], "any", false, false, false, 679), "name", [], "any", false, false, false, 679))) {
                // line 680
                echo "        ";
                $context["classes"] = (($context["classes"] ?? null) . " d-none");
                // line 681
                echo "      ";
            }
            // line 682
            echo "      <div class=\"";
            echo twig_escape_filter($this->env, ($context["classes"] ?? null), "html", null, true);
            echo "\" style=\"flex-grow: 1;\">
        ";
            // line 683
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["translateField"], 'widget');
            echo "
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translateField'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 686
        echo "    ";
        if ( !($context["hide_locales"] ?? null)) {
            // line 687
            echo "      <div class=\"dropdown\">
        <button class=\"btn btn-outline-secondary dropdown-toggle js-locale-btn\"
                type=\"button\"
                data-toggle=\"dropdown\"
                ";
            // line 691
            if (array_key_exists("change_form_language_url", $context)) {
                // line 692
                echo "                  data-change-language-url=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 692), "change_form_language_url", [], "any", false, false, false, 692), "html", null, true);
                echo "\"
                ";
            }
            // line 694
            echo "                aria-haspopup=\"true\"
                aria-expanded=\"false\"
                id=\"";
            // line 696
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 696), "id", [], "any", false, false, false, 696), "html", null, true);
            echo "_dropdown\"
        >
          ";
            // line 698
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 698), "default_locale", [], "any", false, false, false, 698), "iso_code", [], "any", false, false, false, 698), "html", null, true);
            echo "
        </button>
        <div class=\"dropdown-menu dropdown-menu-right locale-dropdown-menu\" aria-labelledby=\"";
            // line 700
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 700), "id", [], "any", false, false, false, 700), "html", null, true);
            echo "_dropdown\">
          ";
            // line 701
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["locales"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
                // line 702
                echo "            <span class=\"dropdown-item js-locale-item\" data-locale=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["locale"], "iso_code", [], "any", false, false, false, 702), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["locale"], "name", [], "any", false, false, false, 702), "html", null, true);
                echo "</span>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 704
            echo "        </div>
      </div>
    ";
        }
        // line 707
        echo "  </div>";
    }

    // line 710
    public function block_birthday_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 711
        echo "  ";
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 712
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 714
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 714)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 714), "")) : ("")) . " form-inline"))]);
            // line 715
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? null))) {
                // line 716
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 718
            echo "
    ";
            // line 719
            $context["yearWidget"] = (("<div class=\"col pl-0\">" . $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "year", [], "any", false, false, false, 719), 'widget')) . "</div>");
            // line 720
            echo "    ";
            $context["monthWidget"] = (("<div class=\"col\">" . $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "month", [], "any", false, false, false, 720), 'widget')) . "</div>");
            // line 721
            echo "    ";
            $context["dayWidget"] = (("<div class=\"col pr-0\">" . $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "day", [], "any", false, false, false, 721), 'widget')) . "</div>");
            // line 723
            echo twig_replace_filter(($context["date_pattern"] ?? null), ["{{ year }}" =>             // line 724
($context["yearWidget"] ?? null), "{{ month }}" =>             // line 725
($context["monthWidget"] ?? null), "{{ day }}" =>             // line 726
($context["dayWidget"] ?? null)]);
            // line 729
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? null))) {
                // line 730
                echo "</div>";
            }
        }
    }

    // line 735
    public function block_file_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 736
        echo "  <style>
    .custom-file-label:after {
      content: \"";
        // line 738
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Browse", [], "Admin.Actions"), "html", null, true);
        echo "\";
    }
  </style>
  <div class=\"custom-file\">
    ";
        // line 742
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source,         // line 743
($context["attr"] ?? null), "class", [], "any", true, true, false, 743)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 743), "")) : ("")) . " custom-file-input")), "data-multiple-files-text" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("%count% file(s)", [], "Admin.Global"), "data-locale" => $this->extensions['PrestaShopBundle\Twig\ContextIsoCodeProviderExtension']->getIsoCode()]);
        // line 748
        if ((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "disabled", [], "any", true, true, false, 748) && twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "disabled", [], "any", false, false, false, 748))) {
            // line 749
            echo "      ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => (twig_get_attribute($this->env, $this->source,             // line 750
($context["attr"] ?? null), "class", [], "any", false, false, false, 750) . " disabled")]);
            // line 752
            echo "    ";
        }
        // line 753
        echo "
    ";
        // line 754
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget', ["attr" => ($context["attr"] ?? null)]);
        echo "

    <label class=\"custom-file-label\" for=\"";
        // line 756
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 756), "id", [], "any", false, false, false, 756), "html", null, true);
        echo "\">
      ";
        // line 757
        $context["attributes"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 757), "attr", [], "any", false, false, false, 757);
        // line 758
        echo "      ";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "placeholder", [], "any", true, true, false, 758)) ? (twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "placeholder", [], "any", false, false, false, 758)) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Choose file(s)", [], "Admin.Actions"))), "html", null, true);
        echo "
    </label>
  </div>
";
    }

    // line 763
    public function block_shop_restriction_checkbox_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 764
        echo "  ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 764), "attr", [], "any", false, false, false, 764), "is_allowed_to_display", [], "any", false, false, false, 764)) {
            // line 765
            echo "    <div class=\"md-checkbox md-checkbox-inline\">
      <label>
        ";
            // line 767
            $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? null), "checkbox")) : ("checkbox"));
            // line 768
            echo "        <input
          class=\"js-multi-store-restriction-checkbox\"
          type=\"";
            // line 770
            echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
            echo "\"
          ";
            // line 771
            $this->displayBlock("widget_attributes", $context, $blocks);
            echo "
          value=\"";
            // line 772
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\"
        >
        <i class=\"md-checkbox-control\"></i>
      </label>
    </div>
  ";
        }
    }

    // line 780
    public function block_generatable_text_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 781
        echo "  <div class=\"input-group\">";
        // line 782
        $this->displayBlock("form_widget", $context, $blocks);
        // line 783
        echo "<span class=\"input-group-btn ml-1\">
      <button class=\"btn btn-outline-secondary js-generator-btn\"
              type=\"button\"
              data-target-input-id=\"";
        // line 786
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\"
              data-generated-value-length=\"";
        // line 787
        echo twig_escape_filter($this->env, ($context["generated_value_length"] ?? null), "html", null, true);
        echo "\"
      >
        ";
        // line 789
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Generate", [], "Admin.Actions"), "html", null, true);
        echo "
      </button>
   </span>
  </div>
";
    }

    // line 795
    public function block_text_with_recommended_length_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 796
        echo "  ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["data-recommended-length-counter" => (("#" .         // line 797
($context["id"] ?? null)) . "_recommended_length_counter"), "class" => "js-recommended-length-input"]);
        // line 801
        if ((($context["input_type"] ?? null) == "textarea")) {
            // line 802
            $this->displayBlock("textarea_widget", $context, $blocks);
        } else {
            // line 804
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
        // line 806
        echo "
  <small class=\"form-text text-muted text-right\"
         id=\"";
        // line 808
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "_recommended_length_counter\"
  >
    <em>
      ";
        // line 811
        echo twig_replace_filter($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("[1][/1] of [2][/2] characters used (recommended)", [], "Admin.Catalog.Feature"), ["[1]" => ("<span class=\"js-current-length\">" . twig_length_filter($this->env,         // line 812
($context["value"] ?? null))), "[/1]" => "</span>", "[2]" => ("<span>" .         // line 814
($context["recommended_length"] ?? null)), "[/2]" => "</span>"]);
        // line 816
        echo "
    </em>
  </small>
";
    }

    // line 821
    public function block_integer_min_max_filter_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 822
        echo "  ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((($__internal_compile_8 = ($context["form"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["min_field"] ?? null) : null), 'widget', ["attr" => ["class" => "min-field"]]);
        echo "
  ";
        // line 823
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((($__internal_compile_9 = ($context["form"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["max_field"] ?? null) : null), 'widget', ["attr" => ["class" => "max-field"]]);
        echo "
";
    }

    // line 826
    public function block_number_min_max_filter_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 827
        echo "  ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((($__internal_compile_10 = ($context["form"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["min_field"] ?? null) : null), 'widget', ["attr" => ["class" => "min-field"]]);
        echo "
  ";
        // line 828
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((($__internal_compile_11 = ($context["form"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["max_field"] ?? null) : null), 'widget', ["attr" => ["class" => "max-field"]]);
        echo "
";
    }

    // line 831
    public function block_form_help($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 832
        echo "  ";
        if (($context["help"] ?? null)) {
            // line 833
            echo "    <small class=\"form-text\">";
            echo twig_escape_filter($this->env, ($context["help"] ?? null), "html", null, true);
            echo "</small>
  ";
        }
    }

    // line 837
    public function block_form_hint($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 838
        echo "  ";
        if (($context["hint"] ?? null)) {
            // line 839
            echo "    <div class=\"hint-box\">
      <div class=\"alert alert-info\">";
            // line 840
            echo ($context["hint"] ?? null);
            echo "</div>
    </div>
  ";
        }
    }

    // line 845
    public function block_custom_content_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 846
        echo "  ";
        $this->loadTemplate(($context["template"] ?? null), "@PrestaShop/Admin/TwigTemplateForm/bootstrap_4_layout.html.twig", 846)->display(twig_array_merge($context, ($context["data"] ?? null)));
    }

    // line 849
    public function block_text_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 850
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["aria-label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("%inputId% input", ["%inputId%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 850), "id", [], "any", false, false, false, 850)], "Admin.Global")]);
        // line 851
        if ( !(null === ($context["data_list"] ?? null))) {
            // line 852
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["list" => (($context["id"] ?? null) . "_datalist")]);
        }
        // line 854
        echo "
  ";
        // line 855
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget', ["attr" => ($context["attr"] ?? null)]);
        echo "

  ";
        // line 857
        if ( !(null === ($context["data_list"] ?? null))) {
            // line 858
            echo "    <datalist id=\"";
            echo twig_escape_filter($this->env, (($context["id"] ?? null) . "_datalist"), "html", null, true);
            echo "\">
      ";
            // line 859
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["data_list"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 860
                echo "        <option value=\"";
                echo twig_escape_filter($this->env, $context["item"], "html", null, true);
                echo "\"></option>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 862
            echo "    </datalist>
  ";
        }
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/TwigTemplateForm/bootstrap_4_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  2495 => 862,  2486 => 860,  2482 => 859,  2477 => 858,  2475 => 857,  2470 => 855,  2467 => 854,  2464 => 852,  2462 => 851,  2460 => 850,  2456 => 849,  2451 => 846,  2447 => 845,  2439 => 840,  2436 => 839,  2433 => 838,  2429 => 837,  2421 => 833,  2418 => 832,  2414 => 831,  2408 => 828,  2403 => 827,  2399 => 826,  2393 => 823,  2388 => 822,  2384 => 821,  2377 => 816,  2375 => 814,  2374 => 812,  2373 => 811,  2367 => 808,  2363 => 806,  2360 => 804,  2357 => 802,  2355 => 801,  2353 => 797,  2351 => 796,  2347 => 795,  2338 => 789,  2333 => 787,  2329 => 786,  2324 => 783,  2322 => 782,  2320 => 781,  2316 => 780,  2305 => 772,  2301 => 771,  2297 => 770,  2293 => 768,  2291 => 767,  2287 => 765,  2284 => 764,  2280 => 763,  2271 => 758,  2269 => 757,  2265 => 756,  2260 => 754,  2257 => 753,  2254 => 752,  2252 => 750,  2250 => 749,  2248 => 748,  2246 => 743,  2245 => 742,  2238 => 738,  2234 => 736,  2230 => 735,  2224 => 730,  2222 => 729,  2220 => 726,  2219 => 725,  2218 => 724,  2217 => 723,  2214 => 721,  2211 => 720,  2209 => 719,  2206 => 718,  2201 => 716,  2199 => 715,  2197 => 714,  2194 => 712,  2191 => 711,  2187 => 710,  2183 => 707,  2178 => 704,  2167 => 702,  2163 => 701,  2159 => 700,  2154 => 698,  2149 => 696,  2145 => 694,  2139 => 692,  2137 => 691,  2131 => 687,  2128 => 686,  2119 => 683,  2114 => 682,  2111 => 681,  2108 => 680,  2105 => 679,  2102 => 678,  2099 => 677,  2095 => 676,  2090 => 675,  2088 => 674,  2084 => 673,  2080 => 621,  2074 => 667,  2067 => 665,  2060 => 663,  2056 => 661,  2053 => 660,  2047 => 658,  2041 => 656,  2039 => 655,  2036 => 654,  2033 => 653,  2031 => 652,  2028 => 651,  2024 => 650,  2019 => 648,  2015 => 646,  2011 => 645,  2006 => 642,  1991 => 640,  1985 => 638,  1979 => 635,  1973 => 632,  1969 => 630,  1967 => 629,  1964 => 628,  1947 => 627,  1943 => 626,  1933 => 622,  1930 => 621,  1926 => 620,  1922 => 584,  1916 => 614,  1906 => 610,  1902 => 608,  1898 => 607,  1888 => 600,  1884 => 598,  1880 => 596,  1878 => 595,  1866 => 585,  1863 => 584,  1859 => 583,  1854 => 576,  1851 => 574,  1844 => 571,  1842 => 570,  1841 => 569,  1840 => 568,  1838 => 567,  1834 => 566,  1832 => 565,  1829 => 563,  1822 => 560,  1820 => 559,  1819 => 558,  1818 => 557,  1816 => 556,  1812 => 555,  1810 => 554,  1808 => 553,  1806 => 552,  1804 => 551,  1800 => 550,  1796 => 545,  1794 => 544,  1792 => 543,  1786 => 542,  1782 => 541,  1778 => 538,  1776 => 537,  1774 => 536,  1768 => 535,  1764 => 534,  1760 => 531,  1758 => 530,  1754 => 529,  1750 => 526,  1748 => 525,  1744 => 524,  1740 => 521,  1738 => 520,  1734 => 519,  1730 => 516,  1728 => 515,  1724 => 514,  1720 => 511,  1718 => 510,  1714 => 509,  1712 => 508,  1708 => 507,  1704 => 504,  1702 => 503,  1700 => 502,  1698 => 501,  1692 => 500,  1688 => 499,  1683 => 494,  1679 => 492,  1677 => 491,  1675 => 490,  1654 => 489,  1649 => 486,  1647 => 485,  1645 => 484,  1643 => 483,  1629 => 482,  1626 => 481,  1624 => 480,  1621 => 479,  1618 => 478,  1615 => 477,  1612 => 476,  1609 => 475,  1606 => 474,  1603 => 473,  1600 => 472,  1597 => 471,  1594 => 470,  1591 => 469,  1589 => 468,  1585 => 467,  1581 => 464,  1577 => 463,  1573 => 460,  1569 => 459,  1565 => 456,  1563 => 455,  1559 => 453,  1555 => 450,  1551 => 449,  1542 => 440,  1525 => 437,  1521 => 436,  1517 => 435,  1514 => 434,  1497 => 433,  1491 => 429,  1487 => 428,  1483 => 427,  1475 => 422,  1469 => 419,  1464 => 418,  1460 => 417,  1456 => 397,  1451 => 412,  1433 => 410,  1428 => 408,  1425 => 407,  1420 => 406,  1416 => 405,  1412 => 404,  1408 => 403,  1404 => 402,  1399 => 401,  1396 => 400,  1379 => 399,  1376 => 398,  1373 => 397,  1369 => 396,  1365 => 371,  1362 => 393,  1355 => 389,  1349 => 386,  1345 => 385,  1340 => 383,  1336 => 381,  1334 => 380,  1329 => 378,  1323 => 375,  1319 => 374,  1315 => 372,  1312 => 371,  1308 => 370,  1304 => 362,  1292 => 365,  1289 => 364,  1286 => 363,  1283 => 362,  1279 => 361,  1275 => 353,  1270 => 357,  1266 => 356,  1262 => 355,  1257 => 354,  1254 => 353,  1250 => 352,  1246 => 338,  1227 => 342,  1224 => 341,  1222 => 340,  1219 => 339,  1216 => 338,  1212 => 337,  1208 => 334,  1203 => 331,  1194 => 328,  1189 => 326,  1186 => 325,  1182 => 324,  1178 => 323,  1172 => 320,  1167 => 318,  1159 => 312,  1157 => 311,  1154 => 310,  1145 => 307,  1141 => 306,  1138 => 305,  1135 => 304,  1132 => 303,  1130 => 302,  1127 => 301,  1124 => 300,  1121 => 299,  1117 => 298,  1112 => 296,  1108 => 295,  1104 => 292,  1099 => 289,  1088 => 287,  1084 => 286,  1080 => 285,  1074 => 282,  1069 => 280,  1061 => 274,  1059 => 273,  1056 => 272,  1048 => 270,  1045 => 269,  1043 => 268,  1040 => 267,  1037 => 266,  1034 => 265,  1032 => 264,  1029 => 263,  1026 => 262,  1023 => 261,  1019 => 260,  1014 => 258,  1010 => 257,  1006 => 254,  1003 => 252,  1001 => 251,  997 => 250,  991 => 246,  976 => 244,  974 => 243,  972 => 242,  968 => 241,  947 => 240,  930 => 239,  926 => 237,  922 => 235,  912 => 231,  902 => 230,  899 => 229,  895 => 228,  892 => 227,  890 => 226,  886 => 225,  881 => 224,  877 => 223,  873 => 220,  869 => 218,  852 => 216,  849 => 215,  832 => 214,  825 => 213,  822 => 212,  818 => 209,  812 => 207,  810 => 206,  806 => 205,  792 => 204,  788 => 202,  784 => 199,  778 => 197,  775 => 196,  770 => 194,  765 => 192,  763 => 191,  753 => 190,  749 => 188,  746 => 187,  744 => 186,  737 => 185,  733 => 184,  728 => 180,  711 => 178,  694 => 177,  691 => 176,  685 => 174,  681 => 173,  676 => 169,  674 => 168,  672 => 167,  669 => 165,  667 => 164,  665 => 163,  661 => 162,  656 => 158,  654 => 157,  652 => 156,  649 => 154,  647 => 153,  645 => 152,  641 => 151,  636 => 147,  630 => 144,  629 => 143,  628 => 142,  624 => 141,  620 => 140,  617 => 138,  611 => 135,  610 => 134,  609 => 133,  605 => 132,  603 => 131,  601 => 130,  597 => 129,  593 => 126,  591 => 125,  589 => 124,  585 => 123,  579 => 118,  576 => 117,  568 => 116,  563 => 114,  561 => 113,  559 => 112,  556 => 110,  554 => 109,  550 => 108,  544 => 103,  542 => 102,  540 => 100,  539 => 99,  538 => 98,  537 => 97,  532 => 95,  530 => 94,  528 => 93,  525 => 91,  523 => 90,  519 => 89,  514 => 85,  512 => 84,  510 => 83,  508 => 82,  506 => 81,  502 => 80,  500 => 79,  497 => 77,  495 => 76,  491 => 75,  484 => 69,  482 => 68,  480 => 67,  476 => 66,  472 => 63,  466 => 60,  463 => 59,  461 => 58,  459 => 57,  453 => 54,  450 => 53,  447 => 52,  445 => 51,  442 => 50,  438 => 49,  434 => 46,  432 => 45,  428 => 44,  424 => 41,  422 => 40,  418 => 39,  414 => 36,  411 => 34,  409 => 33,  405 => 32,  401 => 849,  398 => 848,  396 => 845,  393 => 844,  391 => 837,  388 => 836,  386 => 831,  383 => 830,  381 => 826,  378 => 825,  376 => 821,  373 => 820,  371 => 795,  368 => 794,  366 => 780,  363 => 779,  361 => 763,  358 => 762,  356 => 735,  353 => 734,  351 => 710,  348 => 709,  346 => 673,  343 => 672,  341 => 620,  338 => 619,  336 => 583,  333 => 582,  329 => 579,  327 => 550,  324 => 549,  321 => 547,  319 => 541,  316 => 540,  314 => 534,  311 => 533,  309 => 529,  306 => 528,  304 => 524,  301 => 523,  299 => 519,  296 => 518,  294 => 514,  291 => 513,  289 => 507,  286 => 506,  284 => 499,  281 => 498,  278 => 496,  276 => 467,  273 => 466,  271 => 463,  268 => 462,  266 => 459,  263 => 458,  261 => 453,  258 => 452,  256 => 449,  253 => 448,  250 => 446,  248 => 417,  245 => 416,  243 => 396,  240 => 395,  238 => 370,  235 => 369,  233 => 361,  230 => 360,  228 => 352,  225 => 351,  223 => 337,  220 => 336,  218 => 295,  215 => 294,  213 => 257,  210 => 256,  208 => 250,  205 => 249,  203 => 223,  200 => 222,  198 => 184,  195 => 183,  193 => 173,  190 => 172,  188 => 162,  185 => 161,  183 => 151,  180 => 150,  178 => 129,  175 => 128,  173 => 123,  170 => 122,  168 => 108,  165 => 107,  163 => 89,  160 => 88,  158 => 75,  155 => 74,  153 => 66,  150 => 65,  148 => 49,  145 => 48,  143 => 44,  140 => 43,  138 => 39,  135 => 38,  133 => 32,  130 => 31,  127 => 29,  51 => 28,  44 => 27,  37 => 26,  30 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/TwigTemplateForm/bootstrap_4_layout.html.twig", "C:\\xampp\\htdocs\\prestashop\\Prestashop8\\src\\PrestaShopBundle\\Resources\\views\\Admin\\TwigTemplateForm\\bootstrap_4_layout.html.twig");
    }
}
