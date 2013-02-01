<?php

require_once('hf.php');

printHeader('root');

?>

<a href="projects/methyl.php">DNA Methylation, gene expression, and nucleosome positioning</a>
<br />
Some original research was done analyzing Arabidopsis DNA to determine how DNA methylation
  affects the expression of genes and nucleosome density.  It was shown that
  methylation is correlated with lower gene expression and higher nucleosome
  density.  Research done under John Anderson, Purdue University.
<br />
<br />

<a href="projects/qel.php">QELink</a>
<br />
A full solution for remotely controlling Ingersoll Rand's 
Quiet Electronic Latch devices.  Note that no NDAs or contracts
were signed on this, so all source and electronics may
be freely released.
<br />
<br />


<a href="https://github.com/logic-fault/bitmap-ST7565R">bitmap-ST7565R</a>
<br />
A python program for cranking out the lcd memory array.  Takes a black-and-white
bitmap as input.  Outputs the array in c.  Designed such that the graphic
will be placed in ROM.  More details on the github link.
<br />
<br />

<a href="https://github.com/logic-fault/psyrens_dsp">Beat Detecting DSP</a>
<br />
This project, psyrens dsp, detects the beat in music on a TI EZ-DSP board.
It is made to reproduce the drum beats of music such that an electronic
drum, fire effects, etc can be synched with music.
<br />
<br />

<?

printFooter();

?>
