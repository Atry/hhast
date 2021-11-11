/*
 *  Copyright (c) 2017-present, Facebook, Inc.
 *  All rights reserved.
 *
 *  This source code is licensed under the MIT license found in the
 *  LICENSE file in the root directory of this source tree.
 *
 */

namespace Facebook\HHAST;

final class HHClientLinterIgnoreExceptTest extends TestCase {
  use HHClientLinterTestTrait;

  public function getCleanExamples(): vec<(string)> {
    return vec[
      tuple("<?hh\nclass Foo {}"),
      tuple(
        '<?hh
        function foo_bar(): void {
          clone shape();
        }
        ',
      ),
    ];
  }

  const HHClientLinter::TConfig CONFIG = shape('ignore_except' => keyset[5611]);

}
