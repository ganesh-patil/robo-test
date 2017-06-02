<?php
/**
 * This is project's console commands configuration for Robo task runner.
 *
 * @see http://robo.li/
 */
class RoboFile extends \Robo\Tasks
{
    // define public methods as commands
    public function gitTest() {
      $this->taskGitStack()
 ->stopOnFail()
 ->add('-A')
 ->commit('adding current by robo ')
 ->push('origin','master')
 ->run();
   }
}
