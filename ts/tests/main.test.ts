

import * as $tea from '@alicloud/tea-typescript';
import 'mocha';
import assert from 'assert';
import client from '../src/client'
describe('Tea Util', function () {
  const test = ['a', 'b', 'c', 'd', 'f', '1', '2', '3']
  it('split should ok', function () {
    const result1 = client.split(test, 5, 7)
    assert.deepStrictEqual(['1', '2', '3'], result1);
    
    const result2 = client.split(test, 9, 10)
    assert.deepStrictEqual([], result2);
  });

  it('contains should ok', function () {
    const result1 = client.contains(test, 'a')
    assert.strictEqual(true, result1);

    const result2 = client.contains(test, 'x')
    assert.strictEqual(false, result2);
  });

  it('index should ok', function () {
    const result1 = client.index(test, 'a')
    assert.strictEqual(0, result1);

    const result2 = client.index(test, 'x')
    assert.strictEqual(-1, result2);
  });

  it('size should ok', function () {
    const result = client.size(test)
    assert.strictEqual(8, result);
  });

  it('join should ok', function () {
    const result = client.join(test, ',')
    assert.strictEqual(test.join(','), result);
  });

  it('concat should ok', function () {
    const result = client.concat(test, ['4', '5', '6'])
    assert.deepStrictEqual(test.concat(['4', '5', '6']), result);
  });

  it('ascSort should ok', function () {
    const result = client.ascSort(test)
    assert.deepStrictEqual(['1', '2', '3', 'a', 'b', 'c', 'd', 'f'], result);
  });

  it('descSort should ok', function () {
    const result = client.descSort(test)
    assert.deepStrictEqual(['f', 'd', 'c', 'b', 'a', '3', '2', '1'], result);
  });
})