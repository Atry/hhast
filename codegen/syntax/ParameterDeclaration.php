<?hh
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<e6edfd598a960301961a1ff4e666fce2>>
 */
namespace Facebook\HHAST;
use type Facebook\TypeAssert\TypeAssert;

final class ParameterDeclaration extends EditableSyntax {

  private EditableSyntax $_attribute;
  private EditableSyntax $_visibility;
  private EditableSyntax $_type;
  private EditableSyntax $_name;
  private EditableSyntax $_default_value;

  public function __construct(
    EditableSyntax $attribute,
    EditableSyntax $visibility,
    EditableSyntax $type,
    EditableSyntax $name,
    EditableSyntax $default_value,
  ) {
    parent::__construct('parameter_declaration');
    $this->_attribute = $attribute;
    $this->_visibility = $visibility;
    $this->_type = $type;
    $this->_name = $name;
    $this->_default_value = $default_value;
  }

  <<__Override>>
  public static function fromJSON(
    dict<string, mixed> $json,
    int $position,
    string $source,
  ): this {
    $attribute = EditableSyntax::fromJSON(
      /* UNSAFE_EXPR */ $json['parameter_attribute'],
      $position,
      $source,
    );
    $position += $attribute->getWidth();
    $visibility = EditableSyntax::fromJSON(
      /* UNSAFE_EXPR */ $json['parameter_visibility'],
      $position,
      $source,
    );
    $position += $visibility->getWidth();
    $type = EditableSyntax::fromJSON(
      /* UNSAFE_EXPR */ $json['parameter_type'],
      $position,
      $source,
    );
    $position += $type->getWidth();
    $name = EditableSyntax::fromJSON(
      /* UNSAFE_EXPR */ $json['parameter_name'],
      $position,
      $source,
    );
    $position += $name->getWidth();
    $default_value = EditableSyntax::fromJSON(
      /* UNSAFE_EXPR */ $json['parameter_default_value'],
      $position,
      $source,
    );
    $position += $default_value->getWidth();
    return new self($attribute, $visibility, $type, $name, $default_value);
  }

  <<__Override>>
  public function getChildren(): KeyedTraversable<string, EditableSyntax> {
    yield 'attribute' => $this->_attribute;
    yield 'visibility' => $this->_visibility;
    yield 'type' => $this->_type;
    yield 'name' => $this->_name;
    yield 'default_value' => $this->_default_value;
  }

  <<__Override>>
  public function rewriteDescendants(
    self::TRewriter $rewriter,
    ?Traversable<EditableSyntax> $parents = null,
  ): this {
    $parents = $parents === null ? vec[] : vec($parents);
    $parents[] = $this;
    $attribute = $this->_attribute->rewrite($rewriter, $parents);
    $visibility = $this->_visibility->rewrite($rewriter, $parents);
    $type = $this->_type->rewrite($rewriter, $parents);
    $name = $this->_name->rewrite($rewriter, $parents);
    $default_value = $this->_default_value->rewrite($rewriter, $parents);
    if (
      $attribute === $this->_attribute &&
      $visibility === $this->_visibility &&
      $type === $this->_type &&
      $name === $this->_name &&
      $default_value === $this->_default_value
    ) {
      return $this;
    }
    return new self($attribute, $visibility, $type, $name, $default_value);
  }

  public function getAttributeUNTYPED(): EditableSyntax {
    return $this->_attribute;
  }

  public function withAttribute(EditableSyntax $value): this {
    if ($value === $this->_attribute) {
      return $this;
    }
    return new self(
      $value,
      $this->_visibility,
      $this->_type,
      $this->_name,
      $this->_default_value,
    );
  }

  public function hasAttribute(): bool {
    return !$this->_attribute->isMissing();
  }

  /**
   * @returns AttributeSpecification
   */
  public function getAttribute(): ?AttributeSpecification {
    if ($this->_attribute->isMissing()) {
      return null;
    }
    return TypeAssert::isInstanceOf(AttributeSpecification::class, $this->_attribute);
  }

  /**
   * @returns AttributeSpecification
   */
  public function getAttributex(): AttributeSpecification {
    return TypeAssert::isInstanceOf(AttributeSpecification::class, $this->_attribute);
  }

  public function getVisibilityUNTYPED(): EditableSyntax {
    return $this->_visibility;
  }

  public function withVisibility(EditableSyntax $value): this {
    if ($value === $this->_visibility) {
      return $this;
    }
    return new self(
      $this->_attribute,
      $value,
      $this->_type,
      $this->_name,
      $this->_default_value,
    );
  }

  public function hasVisibility(): bool {
    return !$this->_visibility->isMissing();
  }

  /**
   * @returns ProtectedToken | PublicToken | PrivateToken
   */
  public function getVisibility(): EditableToken {
    return TypeAssert::isInstanceOf(EditableToken::class, $this->_visibility);
  }

  public function getTypeUNTYPED(): EditableSyntax {
    return $this->_type;
  }

  public function withType(EditableSyntax $value): this {
    if ($value === $this->_type) {
      return $this;
    }
    return new self(
      $this->_attribute,
      $this->_visibility,
      $value,
      $this->_name,
      $this->_default_value,
    );
  }

  public function hasType(): bool {
    return !$this->_type->isMissing();
  }

  /**
   * @returns SimpleTypeSpecifier | NullableTypeSpecifier |
   * GenericTypeSpecifier | DictionaryTypeSpecifier | TypeConstant |
   * SoftTypeSpecifier | ClosureTypeSpecifier | TupleTypeSpecifier |
   * ClassnameTypeSpecifier | KeysetTypeSpecifier | ShapeTypeSpecifier |
   * VectorTypeSpecifier | MapArrayTypeSpecifier | VarrayTypeSpecifier |
   * DarrayTypeSpecifier | VectorArrayTypeSpecifier
   */
  public function getType(): EditableSyntax {
    return TypeAssert::isInstanceOf(EditableSyntax::class, $this->_type);
  }

  public function getNameUNTYPED(): EditableSyntax {
    return $this->_name;
  }

  public function withName(EditableSyntax $value): this {
    if ($value === $this->_name) {
      return $this;
    }
    return new self(
      $this->_attribute,
      $this->_visibility,
      $this->_type,
      $value,
      $this->_default_value,
    );
  }

  public function hasName(): bool {
    return !$this->_name->isMissing();
  }

  /**
   * @returns VariableToken | DecoratedExpression
   */
  public function getName(): EditableSyntax {
    return TypeAssert::isInstanceOf(EditableSyntax::class, $this->_name);
  }

  public function getDefaultValueUNTYPED(): EditableSyntax {
    return $this->_default_value;
  }

  public function withDefaultValue(EditableSyntax $value): this {
    if ($value === $this->_default_value) {
      return $this;
    }
    return new self(
      $this->_attribute,
      $this->_visibility,
      $this->_type,
      $this->_name,
      $value,
    );
  }

  public function hasDefaultValue(): bool {
    return !$this->_default_value->isMissing();
  }

  /**
   * @returns SimpleInitializer
   */
  public function getDefaultValue(): ?SimpleInitializer {
    if ($this->_default_value->isMissing()) {
      return null;
    }
    return TypeAssert::isInstanceOf(SimpleInitializer::class, $this->_default_value);
  }

  /**
   * @returns SimpleInitializer
   */
  public function getDefaultValuex(): SimpleInitializer {
    return TypeAssert::isInstanceOf(SimpleInitializer::class, $this->_default_value);
  }
}
