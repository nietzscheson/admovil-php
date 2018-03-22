Feature: Admovil Voucher Related
    In Order to related multiples Voucher
    As a User
    I need to be able related multiples Admovil Voucher

  Background:
      Given I am Connect with Admovil Service

  Scenario: Related multiples Vouchers
      Given I generate a multiples bills as:
          | value | currency |
          | 100   | 200      |
      And I generate a bill for related as:
          | value | currency |
          | 100   | 500      |
      When I want related
      Then must related
