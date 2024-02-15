import{d as f,g,t as e}from"./assets/dom-utils-d77254b8.js";import{i as c,t as h,g as v,d as r,h as m,a as p,r as F,b as u,c as d}from"./assets/sentry-c56b068a.js";import{I as y}from"./assets/file-uploader-035e797c.js";import{I}from"./assets/text-editor-8303aa34.js";/**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License version 3.0
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License version 3.0
 */f(()=>{var n,_;c(),h("Logo"),new y,new I;const o=v("header_logo_image_form");r(o),m(o),((n=document.getElementById("email_use_same_as_header"))!=null&&n.checked||(_=document.getElementById("invoice_use_same_as_header"))!=null&&_.checked)&&o.addEventListener("input",()=>{const i=o.querySelector("#PS_LOGO").files;i.length!==0&&i[0].type==="image/svg+xml"?p(o,psxDesignSvgAlertMessage,"warning"):F(o)}),r("email_logo_image_form"),m("email_logo_image_form");const a=g("#email_logo_forms"),l=u("email_use_header_logo");d("#email_use_same_as_header",i=>{i?(a!=null&&e(a,!1),l!=null&&e(l,!0)):(a!=null&&e(a,!0),l!=null&&e(l,!1))}),r("invoice_logo_image_form"),m("invoice_logo_image_form");const s=g("#invoice_logo_forms"),t=u("invoice_use_header_logo");d("#invoice_use_same_as_header",i=>{i?(s!=null&&e(s,!1),t!=null&&e(t,!0)):(s!=null&&e(s,!0),t!=null&&e(t,!1))}),r("upload_favicon"),m("upload_favicon")});
