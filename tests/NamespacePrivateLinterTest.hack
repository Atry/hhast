/*
 *  Copyright (c) 2017-present, Facebook, Inc.
 *  All rights reserved.
 *
 *  This source code is licensed under the MIT license found in the
 *  LICENSE file in the root directory of this source tree.
 *
 */

namespace Facebook\HHAST;

final class NamespacePrivateLinterTest extends TestCase {
  use LinterTestTrait;

  <<__Reifiable>>
  const type TLinter = NamespacePrivateLinter;

  <<__Override>>
  public function getCleanExamples(): vec<(string)> {
    return vec[
      tuple('<?hh function test();'),
    ];
  }
}
