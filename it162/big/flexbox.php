<?php include "includes/header.php";?>


<!-- START LEFT COLUMN -->
<div>
<section>
    <h2 class="pageID"><?=$PageID?></h2>
        <p>When it comes to designing flexible responsive layout structures, the Flexible Box Layout Module, or Flexbox, is an efficient method that web developers turn to. This method is capable of positioning elements in horizontal or vertical stacks and doesn’t require the use of float or positioning. All modern browsers support CSS Flexbox, such as Google Chrome, Microsoft Edge, Mozilla Firefox, Safari, and Opera among others.</p>
        <p>The first step in using Flexbox is defining the flex container with div class and its flex items. To make the container flexible, the display property of the flex container is set to “flex”. There are six flex container properties: flex-direction, flex-wrap, flex-flow, justify-content, align-items, and align-content. Flex-direction defines the direction the container wants to stack the flex item. Flex-wrap sets the flex items to wrap or not. Flex-flow allows you to set both flex-direction and flex-flow properties shorthand. Justify-content and align-items align flex items and align-content allows you to align the flex lines. </p>
        <p>Flexbox has two axes, the main axis and the cross axis. These axes are referred to for all the elements used with this method. The main axis is defined by the flex-direction property, which has three possible values: row, row-reverse, column, and column-reverse. The first two will make your main axis run along the row in the inline direction while the latter two will make it run in the block direction, from the top of the page to the bottom. The cross axis goes perpendicular to the main axis. Since Flexbox doesn’t assume the writing mode of the document, it uses start and end lines to line up the written content, depending on where the language being used starts and ends (from left to right, or vice versa).</p>
        <p>Flex items also have properties. They are order, flex-grow, flex-shrink, flex-basis, flex, and align-self. Order changes the order of the flex items. Flex-grow controls how much a flex item grows compared to the rest of the items and flex-shrink controls how much it shrinks relative to the others. Flex-basis sets the initial length of a flex item. Flex is a shorthand property for the flex-grow, flex-shrink, and flex-basis properties. Align-self provides alignment for the item inside the flexible container, which can override the alignment set by the align-items property.</p>
</section>
</div>

<!-- END LEFT COLUMN -->

<!-- START RIGHT COLUMN -->
<div>
<aside>
    <h3>Citations</h3>
        <dl>
            <dt>Citation One</dt>
            <dd>“Basic Concepts of Flexbox - CSS: Cascading Style Sheets: MDN.” CSS: Cascading Style Sheets | MDN, Mozilla, developer.mozilla.org/en-US/docs/Web/CSS/CSS_Flexible_Box_Layout/Basic_Concepts_of_Flexbox. </dd>
        </dl>
        <dl>
            <dt>Citation Two</dt>
            <dd>Can I Use... Support Tables for HTML5, CSS3, Etc, caniuse.com/?search=flexbox. </dd>
        </dl>
        <dl>
            <dt>Citation Three</dt>
            <dd>“CSS Flexbox.” CSS Flexbox (Flexible Box), W3Schools, www.w3schools.com/css/css3_flexbox.asp. </dd>
        </dl>
</aside>
</div>
<!-- END RIGHT COLUMN -->
       
<?php include "includes/footer.php";?>