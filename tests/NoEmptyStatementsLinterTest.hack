/*
 *  Copyright (c) 2017-present, Facebook, Inc.
 *  All rights reserved.
 *
 *  This source code is licensed under the MIT license found in the
 *  LICENSE file in the root directory of this source tree.
 *
 */

namespace Facebook\HHAST;

final class NoEmptyStatementsLinterTest extends TestCase {
  use AutoFixingLinterTestTrait<ASTLintError>;

  <<__Reifiable>>
  const type TLinter = NoEmptyStatementsLinter;

  <<__Override>>
  public function getCleanExamples(): vec<(string)> {
    return vec[tuple('<?hh fn_call(); '), tuple('<?hh for(;;) { }')];
  }
}
