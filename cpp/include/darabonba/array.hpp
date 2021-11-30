// This file is auto-generated, don't edit it. Thanks.

#ifndef DARABONBA_ARRAY_H_
#define DARABONBA_ARRAY_H_

#include <iostream>
#include <vector>

using namespace std;

namespace Darabonba_Array {
class Client {
public:
  static vector<string> split(shared_ptr<vector<string>> raw, shared_ptr<int> index, shared_ptr<int> limit);
  static bool contains(shared_ptr<vector<string>> raw, shared_ptr<string> str);
  static int index(shared_ptr<vector<string>> raw, shared_ptr<string> str);
  static int size(shared_ptr<vector<string>> raw);
  static string get(shared_ptr<vector<string>> raw, shared_ptr<int> index);
  static string join(shared_ptr<vector<string>> raw, shared_ptr<string> sep);
  static string concat(shared_ptr<vector<string>> raw, shared_ptr<vector<string>> sep);

  Client() {};
  virtual ~Client() = default;
};
} // namespace Darabonba_Array

#endif
